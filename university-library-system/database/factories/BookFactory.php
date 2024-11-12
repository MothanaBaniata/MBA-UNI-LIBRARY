<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->text(),
            'category_id' => Category::factory(),
            'author' => fake()->name(),
            'total_copies' => fake()->numberBetween(6, 10),
            'borrowed_copies' => fake()->numberBetween(0, 5),
            'image' => 'https://placeimg.com/640/480/any',
        ];
    }
}
