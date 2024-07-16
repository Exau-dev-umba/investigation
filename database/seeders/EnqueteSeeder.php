<?php

namespace Database\Seeders;

use App\Models\Enquete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enquete::factory(10)->create();
    }
}