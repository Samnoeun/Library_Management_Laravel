<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class LoginFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'login_time' => $this->faker->dateTime(),
            'ip_address' => $this->faker->ipv4(),
        ];
    }
}

