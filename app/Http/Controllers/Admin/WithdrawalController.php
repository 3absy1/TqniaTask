<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\WithdrawalRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewWalletRequestNotification;
use App\Notifications\WalletRequestStatusNotification;
use Illuminate\Support\Facades\Notification;

class WithdrawalController extends Controller
{
    public function index(WithdrawalRequestDataTable $dataTable)
    {
        $withdrawalRequests = WithdrawalRequest::with('user')->get();
        return $dataTable->render('Withdrawal.withdrawal',compact('withdrawalRequests'));
    }
    public function request(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $admin = Auth::user();
        $amount = $request->amount;

        if ($admin->wallet_balance < $amount) {
            return back()->withErrors(['Insufficient balance']);
        }

        $admin->wallet_balance -= $amount;
        $admin->frozen_balance += $amount;
        $admin->save();

        $withdrawal=WithdrawalRequest::create([
            'user_id' => $admin->id,
            'amount' => $amount,
            'status' => 'pending',
        ]);
        Notification::send(
        User::where('id', '!=', $admin->id)->get(),
        new NewWalletRequestNotification('withdrawal', [
                'id' => $withdrawal->id,
                'name' => $admin->name,
                'amount' => $amount,
            ])
        );

        return back()->with('status', 'Withdrawal requested');
    }

    public function approve(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected,pending',
        ]);

        $admin = Auth::user();
        $withdrawal = WithdrawalRequest::findOrFail($id);

        if ($withdrawal->status !== 'pending') {
            return back()->withErrors(['This request is already processed']);
        }

        $requestingAdmin = User::find($withdrawal->user_id);

        if ($request->status === 'approved') {
            $requestingAdmin->frozen_balance -= $withdrawal->amount;
        } else {
            $requestingAdmin->frozen_balance -= $withdrawal->amount;
            $requestingAdmin->wallet_balance += $withdrawal->amount;
        }

        $requestingAdmin->save();

        $withdrawal->update([
            'status' => $request->status,
            'action_by' => $admin->id,
        ]);

        $requestingAdmin->notify(new WalletRequestStatusNotification(
            'withdrawal',
            $request->status,
            $withdrawal->amount
        ));

        return back()->with('status', 'Withdrawal ' . $request->status);
    }
}
