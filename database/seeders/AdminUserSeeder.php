<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            [
                'email' => 'admin@example.com'
            ],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin')
            ]
        );

        $admin->assignRole('Super Admin');
    }
}
