<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Member;
use App\Models\Book;

class HistoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'member_id' => Member::inRandomOrder()->first()->id ?? Member::factory(),
            'book_id' => Book::inRandomOrder()->first()->id ?? Book::factory(),
            'action' => $this->faker->randomElement(['borrowed', 'returned']),
            'action_date' => $this->faker->date(),
        ];
    }
}
