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
        // Create an admin user
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('consolatA40@$'), // Hashed password
                'is_admin' => true,
                'is_doctor' => false,
                'is_pharmacist' => false,
                'is_laboratorist' => false,
                'is_nurse' => false,
            ]
        );
    }
}
