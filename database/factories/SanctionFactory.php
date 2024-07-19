<?php

namespace Database\Factories;

use App\Models\Categorie_sanction;
use App\Models\Employeur;
use App\Models\Enquete;
use App\Models\Motif_sanction;
use App\Models\Type_sanction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sanction>
 */
class SanctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $statuts = ['Fait', 'Encours', 'Ouvert'];

        return [
            'num_ordre'=>$this->faker->numberBetween(1,100),
            'agent'=>$this->faker->name(),
            'statut'=> $this->faker->randomElement($statuts),
            'enquete_id'=>Enquete::inRandomOrder()->first()->id,
            'categorie_sanction_id' => Categorie_sanction::inRandomOrder()->first()->id,
            'type_sanction_id' => Type_sanction::inRandomOrder()->first()->id,
            'employeur_id' => Employeur::inRandomOrder()->first()->id,
            'motif_sanction_id' => Motif_sanction::inRandomOrder()->first()->id,
            'nbr_jour_pub_rapport'=>$this->faker->numberBetween(1,5),
            'date_pub_rh'=>$this->faker->dateTimeBetween('-1 years', 'now'),
            'date_envoie_demande_exlp'=>$this->faker->dateTimeBetween('-2 years', 'now'),
            'date_reception_demande_exlp'=>$this->faker->dateTimeBetween('-2 years', 'now'),
            'date_sanction'=> $this->faker->dateTimeBetween('-2 years', 'now'),
            'evidences'=>$this->faker->text(200),
            'nbr_jours_passe_sla'=> $this->faker->numberBetween(1, 5),
        ];
    }
}