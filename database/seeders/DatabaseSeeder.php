<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create( attributes: [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt(value:'12345678'),
        ]);
        User::factory()->create( attributes: [
            'name' => 'Aldent',
            'email' => 'aldenzafani748@gmail.com',
            'password' => bcrypt(value:'12345678'),
        ]);

        $this->call( class: DestinationSeeder::class);

        $this->call( class: UserSeeder::class);
    }

    
}
