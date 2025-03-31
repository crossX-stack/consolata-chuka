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
        // Ensure admin user exists
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // If email exists, update user; otherwise, create new
            [
                'name' => 'admin',
                'email_verified_at' => now(), // Mark email as verified
                'password' => Hash::make('consolatA40@$'), // Always hashed
                'is_admin' => true,
                'is_doctor' => false,
                'is_pharmacist' => false,
                'is_laboratorist' => false,
                'is_nurse' => false,
            ]
        );
    }
}
