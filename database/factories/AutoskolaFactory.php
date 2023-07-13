<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autoskola>
 */
class AutoskolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ime'=>$this->faker->name(),
            'adresa'=>$this->faker->streetAddress(),
            'brojtelefona'=>$this->faker->numberBetween(100, 2000000),
            
        ];
    }
}
