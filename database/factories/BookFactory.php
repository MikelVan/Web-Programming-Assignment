<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Publisher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $publisher = Publisher::all()->pluck('id');

        return [
            'publisher_id' => fake()->randomElement($publisher),
            'title' => fake()->sentence(mt_rand(1, 3)),
            'author' => fake()->name(),
            'year' => fake()->numberBetween(1900, 2023),
            'synopsis' => fake()->paragraph(),
            'image' => 'assets/images/bookCover.jpg'
        ];
    }
}