<?php

namespace Database\Seeders;

use App\Models\Enquete;
use App\Models\Recommandation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecommandationEnqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer des enquetes
        $enquetes = Enquete::factory()->count(10)->create();

        // Créer des recommanadtions
        $recommandations = Recommandation::factory()->count(5)->create();

        // Attacher des recommandations aux enquêtes
        foreach ($enquetes as $enquete) {
            $enquete->recommandations()->attach(
                $recommandations->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
