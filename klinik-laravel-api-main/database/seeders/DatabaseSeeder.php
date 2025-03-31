<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate 100,000 random users
        \App\Models\User::factory(100000)->create();

        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('consolatA40@$'),
            'email_verified_at' => now(), // Mark email as verified
            'role' => 'admin', // Ensure your database has a 'role' column
        ]);
    }
}
