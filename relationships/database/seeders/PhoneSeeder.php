<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Phone::create([
        //     "prefix" => "34",
        //     "phone_number" => 666666,
        //     "user_id" => 1
        // ]);

        Phone::create([
            "prefix" => "52",
            "phone_number" => 123456,
            "user_id" => 1
        ]);
    }
}
