<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            'name' => 'Rizwan',
            'email' => 'rizwan@test.com',
            'password' => Hash::make('12345678'),
        ]);


        $this->call([
//            UserSeeder::class,
            FeedbackSeeder::class,
        ]);

    }
}
