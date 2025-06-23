<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        Library::factory()->count(2)->create();
    }
}