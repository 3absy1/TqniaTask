<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User 1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'permissions' => ['withdraw-request', 'approve-withdrawal', 'approve-topup'],
            'wallet_balance' => 500.00,
            'frozen_balance' => 0,
        ]);

        User::create([
            'name' => 'Test User 2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'),
            'permissions' => ['withdraw-request', 'approve-withdrawal'],
            'wallet_balance' => 1000.00,
            'frozen_balance' => 200.00,
        ]);

        User::create([
            'name' => 'Test User 3',
            'email' => 'user3@example.com',
            'password' => Hash::make('password'),
            'permissions' => ['approve-topup'],
            'wallet_balance' => 750.00,
            'frozen_balance' => 0,
        ]);
    }
}
