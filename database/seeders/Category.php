<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class Category extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'History']);
        Category::create(['name' => 'Science']);
    }
}
