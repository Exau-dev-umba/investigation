<?php

namespace Database\Seeders;

use App\Models\Recommandation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecommandationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recommandation::factory(10)->create();
    }
}