<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Book extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel Basics',
            'author' => 'Taylor Otwell',
            'library_id' => 1,
            'category_id' => 1,
            'published_at' => '2021-01-01',
            'status' => 'available'
        ]);

        Book::create([
            'title' => 'History of Cambodia',
            'author' => 'Chan Dara',
            'library_id' => 2,
            'category_id' => 2,
            'published_at' => '2019-05-15',
            'status' => 'available'
        ]);
    }
}
