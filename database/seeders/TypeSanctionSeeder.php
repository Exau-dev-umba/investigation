<?php

namespace Database\Seeders;

use App\Models\Type_sanction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type_sanction::create(['type' => 'Avertissement écrit']);
        Type_sanction::create(['type' => 'Avertissement verbal']);
        Type_sanction::create(['type' => 'Blâme']);
        Type_sanction::create(['type' => ' Mise à pied']);
        Type_sanction::create(['type' => ' Licenciement']);
        Type_sanction::create(['type' => ' Autres']);



    }
}
