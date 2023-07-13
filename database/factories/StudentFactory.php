<?php

namespace Database\Factories;
use App\Models\Autoskola;
use App\Models\Korisnik;
use App\Models\Instruktor;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'autoskola_id'=> Autoskola::factory(),
            'korisnik_id'=> Korisnik::factory(),
            'instruktor'=> Instruktor::factory(),
            'brojcasovavoznje'=>$this->faker->numberBetween(1, 39),
            'brojnocnihvoznji'=>$this->faker->numberBetween(0, 1),
            'brojtelefona'=>$this->faker->numberBetween(100, 2000000),
            'brojkredita'=>$this->faker->numberBetween(0, 40),


        ];
    }
}
