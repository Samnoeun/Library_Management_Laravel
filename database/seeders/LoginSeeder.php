<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;

class LoginSeeder extends Seeder
{
    public function run(): void
    {
        Login::factory(10)->create();
    }
}
