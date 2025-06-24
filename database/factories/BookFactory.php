<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'library_id' => Library::factory(),
            'category_id' => Category::factory(),
            'published_at' => $this->faker->date(),
            'status' => $this->faker->randomElement(['available', 'borrowed']),
        ];
    }
}





