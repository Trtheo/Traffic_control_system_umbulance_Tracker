<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 👤 Admin user
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@ambulance.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // 👥 Normal test user
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
