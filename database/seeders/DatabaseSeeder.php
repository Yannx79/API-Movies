<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Cassette;
use App\Models\Movie;
use App\Models\MovieType;
use App\Models\Rent;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        Actor::factory(50)->create();
        MovieType::factory(10)->create();
        Movie::factory(100)->create();
        Cassette::factory(100)->create();
        Rent::factory(100)->create();
    }
}
