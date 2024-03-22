<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "id" => 1,
            "name" => "example",
            "email" => "example@example.com",
            "password" => Hash::make("12345678"),
        ]);

        User::create([
            "id" => 2,
            "name" => "example 2",
            "email" => "example@example.com",
            "password" => Hash::make("12345678"),
        ]);

        User::create([
            "id" => 3,
            "name" => "example 3",
            "email" => "example@example.com",
            "password" => Hash::make("12345678"),
        ]);
    }
}
