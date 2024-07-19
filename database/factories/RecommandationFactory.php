<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recommandation>
 */
class RecommandationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_ordre'=>$this->faker->numberBetween(1,100),
            'date_reception' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'recommandation'=> $this->faker->text(200),
            'causes'=>$this->faker->name(),
            'acceptation'=> $this->faker->boolean(),
            'commentaires'=>$this->faker->text(200),
            'date_cloture'=>$this->faker->dateTimeThisMonth(),
            'deadline'=>$this->faker->dateTimeThisYear(),
        ];
    }
}