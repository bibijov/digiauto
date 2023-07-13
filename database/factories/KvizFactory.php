<?php

namespace Database\Factories;
use App\Models\Autoskola;
use App\Models\Korisnik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kviz>
 */
class KvizFactory extends Factory
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
            'autoskola_id'=> Autoskola::factory(),
            'korisnik_id'=> Korisnik::factory(),
            'opis'=>$this->faker->words(),
            'pitanje_1'=>$this->faker->words(),
            'odgovor_1'=>$this->faker->words(),
            'pitanje_2'=>$this->faker->words(),
            'odgovor_2'=>$this->faker->words(),
            'pitanje_3'=>$this->faker->words(),
            'odgovor_3'=>$this->faker->words(),
            'pitanje_4'=>$this->faker->words(),
            'odgovor_4'=>$this->faker->words(),
            'pitanje_5'=>$this->faker->words(),
            'odgovor_5'=>$this->faker->words(),
            'pitanje_6'=>$this->faker->words(),
            'odgovor_6'=>$this->faker->words(),
            'pitanje_7'=>$this->faker->words(),
            'odgovor_7'=>$this->faker->words(),
            'pitanje_8'=>$this->faker->words(),
            'odgovor_8'=>$this->faker->words(),
            'pitanje_9'=>$this->faker->words(),
            'odgovor_9'=>$this->faker->words(),
            'pitanje_10'=>$this->faker->words(),
            'odgovor_10'=>$this->faker->words(),
        ];
    }
}
