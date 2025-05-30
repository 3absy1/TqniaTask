<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TopupRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\TopupRequest;
use App\Models\User;
use App\Notifications\WalletRequestStatusNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TopupController extends Controller
{
    public function index(TopupRequestDataTable $dataTable)
    {
        $topupRequests = TopupRequest::with('client')->get();
        return $dataTable->render('Topup.topup',compact('topupRequests'));
    }
    public function approve(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected,pending',
        ]);

        $admin = Auth::user();
        $topup = TopupRequest::findOrFail($id);

        if ($topup->status !== 'pending') {
            return back()->withErrors(['This request is already processed']);
        }

        $requestingAdmin = Client::find($topup->client_id);

        if ($request->status === 'approved') {
            $requestingAdmin->wallet_balance += $topup->amount;
        }

        $requestingAdmin->save();

        $topup->update([
            'status' => $request->status,
            'action_by' => $admin->id,
        ]);
        $requestingAdmin->notify(new WalletRequestStatusNotification(
            'topup',
            $request->status,
            $topup->amount
        ));

        return back()->with('status', 'Top-up ' . $request->status);
    }
}
