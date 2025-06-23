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
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name,
            'library_id' => Library::inRandomOrder()->first()?->id ?? 1,
            'category_id' => Category::inRandomOrder()->first()?->id ?? 1,
            'published_at' => $this->faker->date(),
            'status' => $this->faker->randomElement(['available', 'borrowed']),
        ];
    }
}