<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin account
        $admin = User::firstOrNew([
            'email' => 'admin@gmail.com'
        ]);

        $admin->name = 'portal Admin';git status
        $admin->password = Hash::make('itadmin@123');
        $admin->role = 'admin';
        $admin->save();

        // Create Normal User account
        $user = User::firstOrNew([
            'email' => 'user@gmail.com'
        ]);

        $user->name = 'employee User';
        $user->password = Hash::make('User@123');
        $user->role = 'user';
        $user->save();
    }
}
