<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrow;

class BorrowSeeder extends Seeder
{
    public function run(): void
    {
        Borrow::factory(10)->create();
    }
}
