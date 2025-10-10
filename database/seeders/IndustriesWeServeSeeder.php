<?php

namespace Database\Seeders;

use App\Models\IndustriesWeServe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustriesWeServeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IndustriesWeServe::factory(4)->create();
    }
}
