<?php

namespace Database\Seeders;

use App\Models\Attraction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{

    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            Attraction::create([
                'name' => fake(locale: 'id_ID')->name(),
                'description' => fake(locale: 'id_ID')->sentence(),
            ]);
        }
        
    }
}