<?php

namespace Database\Seeders;

use App\Models\Categorie_sanction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie_sanction::create(['categorie' => 'Interne']);
        Categorie_sanction::create(['categorie' => 'Externe']);
        Categorie_sanction::create(['categorie' => 'Stagiaire']);
        Categorie_sanction::create(['categorie' => 'journalier']);
        Categorie_sanction::create(['categorie' => 'partenaire']);
        Categorie_sanction::create(['categorie' => 'autres']);


    }
}
