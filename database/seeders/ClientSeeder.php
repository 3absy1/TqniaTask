<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'Client One',
            'email' => 'client1@example.com',
            'password' => Hash::make('password'),
            'permissions' => ['topup-request'],
        ]);

        Client::create([
            'name' => 'Client Two',
            'email' => 'client2@example.com',
            'password' => Hash::make('password'),
            'permissions' => ['topup-request', 'withdraw-request'],
        ]);
    }
}
