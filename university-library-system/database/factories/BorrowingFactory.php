<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrowing>
 */
class BorrowingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $borrowedAt = fake()->dateTimeBetween('-1 month', 'now');
        $dueDate = fake()->dateTimeBetween($borrowedAt, '+1 month');

        $returnedAt = fake()->boolean(50) ? fake()->dateTimeBetween($borrowedAt, $dueDate) : null;

        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'borrowed_at' => $borrowedAt,
            'due_date' => $dueDate,
            'returned_at' => $returnedAt,
        ];
    }
}
