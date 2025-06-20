<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        Library::create(['name' => 'Central Library', 'location' => 'Phnom Penh']);
        Library::create(['name' => 'City Library', 'location' => 'Battambang']);
    }
}