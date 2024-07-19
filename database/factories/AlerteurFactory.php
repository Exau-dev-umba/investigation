<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alerteur>
 */
class AlerteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name'=> $this->faker->name(),
            'adresse'=>$this->faker->address(),
            'telephone'=>$this->faker->phoneNumber(),
            'cuid'=>$this->faker->userAgent(),
        ];
    }
}