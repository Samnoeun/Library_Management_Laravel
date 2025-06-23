<?php

namespace Database\Seeders;

use App\Models\Library;

use App\Models\Category;
use App\Models\Book;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            LibrarySeeder::class,
            CategorySeeder::class,
            BookSeeder::class,
        ]);
    }
}
