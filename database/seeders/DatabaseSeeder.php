<?php

namespace Database\Seeders;

use App\Models\Library;

use App\Models\Category;
use App\Models\Book;
use App\Models\Booking;
use Database\Seeders\LibrarySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\BookingSeeder;

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
            // BookingSeeder::class,
        ]);
    }
}
