<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Librarian;

class LibrarianSeeder extends Seeder
{
    public function run(): void
    {
        Librarian::factory()->count(5)->create();
    }
}
