<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake()->addProvider(new \Mmo\Faker\PicsumProvider(fake()));

        return [
            'nombre' => fake()->firstName() . " " . fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'imagen' => 'autores/' . fake()->picsum('public/storage/autores', 640, 480, false),
            'role' => random_int(1, 2)
        ];
    }
}
