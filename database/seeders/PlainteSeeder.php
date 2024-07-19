<?php

namespace Database\Seeders;

use App\Models\Plainte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlainteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plainte::factory(5)->create();

    }
}
