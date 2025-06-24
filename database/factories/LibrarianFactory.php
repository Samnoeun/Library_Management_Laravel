<?php

namespace Database\Factories;

use App\Models\Librarian;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibrarianFactory extends Factory
{
    protected $model = Librarian::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'library_id' => \App\Models\Library::factory(),
        ];
    }
}
