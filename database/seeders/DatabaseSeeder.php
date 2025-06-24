<?php

namespace Database\Seeders;

use App\Models\Library;
use App\Models\Category;
use App\Models\Book;
use App\Models\Member;
use App\Models\Booking;
use App\Models\Borrow;
use App\Models\History;
use App\Models\User;
use App\Models\Librarian;
use App\Models\Login;

use Database\Seeders\UserSeeder;
use Database\Seeders\MemberSeeder;
use Database\Seeders\LibrarianSeeder;
use Database\Seeders\LoginSeeder;
use Database\Seeders\BorrowSeeder;
use Database\Seeders\HistorySeeder;
use Database\Seeders\LibrarySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\BookingSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LibrarySeeder::class,
            CategorySeeder::class,
            BookSeeder::class,
            MemberSeeder::class,
            BookingSeeder::class,
            LibrarianSeeder::class,
            BorrowSeeder::class,
            HistorySeeder::class,
            LoginSeeder::class,
        ]);
    }
}
