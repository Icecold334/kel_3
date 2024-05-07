<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Products;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Products::factory(25)->create();

        User::create([
            'name' => 'Fauzan Imam',
            'username' => 'fauzan',
            'email' => 'fauzanimam334@gmail.com',
            'email_verified_at' => now(),
            'role' => 1,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Role 2',
            'username' => 'dua',
            'email' => 'emaildua@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'password' => Hash::make('dua'),
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();
    }
}
