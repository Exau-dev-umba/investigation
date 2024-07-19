<?php

namespace Database\Factories;

use App\Models\Alerteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enquete>
 */
class EnqueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuts = ['Ouvert', 'Encours', 'Close'];
        $priorite = ['Élevé', 'Moyen', 'Faible'];
        $category = ['Interne', 'Externe'];
        $typecas = ['Fraude', 'Corruption', 'Tentative'];
        $entite = ['DRSI', 'FIC', 'MARKETING'];


        return [
            'num_ordre' => $this->faker->numberBetween(1,100),
            'date_reception'=> $this->faker->dateTime(),
            'provenance_id'=> Alerteur::inRandomOrder()->first()->id,
            'categorie'=> $this->faker->randomElement($category),
            'entites_concernes'=> $this->faker->randomElement($entite),
            'type_cas'=> $this->faker->randomElement($typecas),
            'repete'=> $this->faker->boolean(),
            'libele'=> $this->faker->word(),
            'avere'=> $this->faker->boolean(),
            'date_demarrage'=> $this->faker->dateTime(),
            'status'=> $this->faker->randomElement($statuts),
            'commentaires'=> $this->faker->name(),
            'enqueteur'=> $this->faker->name(),
            'priorite'=> $this->faker->randomElement($priorite),
            'montant_init_impact_financier'=> $this->faker->numberBetween(20000, 100000),
            'montant_reel_impact_financier' => $this->faker->numberBetween(50000, 300000),
            'montant_recouvrir' => $this->faker->numberBetween(10000, 50000),
            'date_prevision_pub_rapport' => $this->faker->dateTime(),
            'date_final_pub_rapport' => $this->faker->dateTime(),
            'date_diffusion' => $this->faker->dateTime(),
        ];
    }
}