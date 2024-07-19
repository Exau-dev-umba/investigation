<?php

namespace Database\Seeders;

use App\Models\Alerteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlerteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alerteur::factory(20)->create();

    }
}