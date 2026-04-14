<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 100; $i++) {
            User::create([
                'name' => fake(locale: 'id_ID')->name(),
                'email' => fake(locale: 'id_ID')->email(),
                'password' => bcrypt('password'),
            ]);
        }
    }
}
