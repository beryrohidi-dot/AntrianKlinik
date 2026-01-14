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
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'), // password sudah di-hash
            'role' => 'admin',
        ]);

        // User biasa
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@mail.com',
            'password' => Hash::make('password'), // password sudah di-hash
            'role' => 'user',
        ]);
    }
}