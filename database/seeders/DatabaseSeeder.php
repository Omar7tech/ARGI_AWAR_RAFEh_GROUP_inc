<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Awar Rafeh Group Admin',
            'email' => 'argi@company.com',
            'password' => 'Argi7Argi'
        ]);

        $this->call([
            OurWorkSeeder::class,
            ServiceSeeder::class,
            IndustriesWeServeSeeder::class
        ]);
    }
}
