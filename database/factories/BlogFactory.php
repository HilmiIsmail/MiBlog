<?php

namespace Database\Factories;

use App\Models\Autor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
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
            'titulo' => fake()->unique()->words(random_int(1, 3), true),
            'contenido' => fake()->text(),
            'imagen' => 'blogs/' . fake()->picsum('public/storage/blogs', 640, 480, false),
            'autor_id' => Autor::all()->random()->id
        ];
    }
}
