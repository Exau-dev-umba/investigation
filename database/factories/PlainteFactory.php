<?php

namespace Database\Factories;

use App\Models\Enquete;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plainte>
 */
class PlainteFactory extends Factory
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
            'num_ordre'=> $this->faker->numberBetween(20, 500),
            'date_pub_rapport_enquete'=>$this->faker->dateTimeBetween('-2 years','now'),
            'enquete_id'=>Enquete::inRandomOrder()->first()->id,
            'type_cas'=>$this->faker->name(),
            'statut'=> $this->faker->randomElement($statuts),
            'noms'=>$this->faker->name(),
            'evidences'=>$this->faker->text(200),
            'nbr_jours_passe_sla'=>$this->faker->numberBetween(1,5),
        ];
    }
}