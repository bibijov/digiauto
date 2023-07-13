<?php

namespace Database\Factories;
use App\Models\Autoskola;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Korisnik>
 */
class KorisnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * return array<string, mixed>
     */
    public function definition(): array
    {
        $uloga=$this->faker->randomElement(['globaladmin','admin', 'instruktor', 'student', 'ucitelj']);
        return [
            'ime'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'uloga'=>$uloga,
            'autoskola_id'=> Autoskola::factory(),
            'profilnaURL'=>$this->faker->imageUrl(),
        ];
    }
}
