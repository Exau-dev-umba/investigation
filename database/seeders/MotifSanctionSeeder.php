<?php

namespace Database\Seeders;

use App\Models\Motif_sanction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotifSanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Motif_sanction::create(['motif' => 'Politiques']);
        Motif_sanction::create(['motif' => 'Procédures']);
        Motif_sanction::create(['motif' => 'Règlement Général et éléments de Règles d’or']);
        Motif_sanction::create(['motif' => 'non respectés']);


    }
}