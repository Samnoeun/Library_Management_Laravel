<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Member;
use App\Models\Book;

class BorrowFactory extends Factory
{
    // database/factories/BorrowFactory.php

    public function definition(): array
    {
        $borrowDate = $this->faker->date();
        $returnDate = $this->faker->dateTimeBetween($borrowDate, '+30 days')->format('Y-m-d');

        return [
            'member_id' => \App\Models\Member::factory(),
            'book_id' => \App\Models\Book::factory(),
            'borrow_date' => $borrowDate,
            'return_date' => $returnDate,
            'status' => 'returned',
        ];
    }
}
