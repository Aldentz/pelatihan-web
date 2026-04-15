<!-- <?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            Destination::create([
                'name' => fake(locale: 'id_ID')->name(),
                'description' => fake(locale: 'id_ID')->sentence(),
            ])
        }
        
    }
} -->