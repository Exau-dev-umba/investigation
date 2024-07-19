<?php

namespace Database\Seeders;

use App\Models\Employeur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employeur::create(['employeur' => 'ITM']);
        Employeur::create(['employeur' => 'BENSIZWE']);
        Employeur::create(['employeur' => 'CAMEO']);
    }
}
