<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@123'),
            'is_admin' => 'admin',
        ]);

        // Create a regular user
        User::create([
            'name' => 'Sumit User',
            'email' => 'sumit@gmail.com',
            'password' => Hash::make('sumit@123'),
            'is_admin' => 'user',
        ]);

        // Create an agent user
        User::create([
            'name' => 'Agent User',
            'email' => 'agent@gmail.com',
            'password' => Hash::make('agent@123'),
            'is_admin' => 'agent',
        ]);
    }
}