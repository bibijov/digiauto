<?php

namespace Database\Factories;
use App\Models\Autoskola;
use App\Models\Korisnik;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instruktor>
 */
class InstruktorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marke =$this->faker->randomElement( ['Toyota', 'Honda', 'Ford', 'Chevrolet']);
        return [
            'ime'=>$this->faker->name(),
            'autoskola_id'=> Autoskola::factory(),
            'korisnik_id'=> Korisnik::factory(),
            'auto'=>$marke,
            'brojtelefona'=>$this->faker->numberBetween(100, 2000000),
            
        ];
    }
}
