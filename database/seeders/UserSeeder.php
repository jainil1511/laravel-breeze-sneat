<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Create a sample user
         User::create([
            'name' => 'Jainil Darji',
            'email' => 'jainil@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // You can add more sample users as needed
        User::create([
            'name' => 'Purvi Trivedi',
            'email' => 'purvi@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
