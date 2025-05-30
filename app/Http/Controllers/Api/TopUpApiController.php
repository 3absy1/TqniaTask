<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TopupRequest;
use Illuminate\Http\Request;

class TopUpApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $client = auth('client')->user();

        $topup = TopupRequest::create([
            'client_id' => $client->id,
            'amount' => $request->amount,
            'status' => 'pending',
        ]);

        return response()->json(['message' => 'Top-up request sent']);
    }
}
