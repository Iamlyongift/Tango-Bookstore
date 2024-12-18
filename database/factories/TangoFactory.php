<?php

namespace Database\Factories;

use App\Models\Tango;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class TangoFactory extends Factory
{
    protected $model = Tango::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'genre' => $this->faker->randomElement(['Fiction', 'Non-Fiction', 'Science', 'History', 'Biography']),
            'description' => $this->faker->realText(500),
            'cover_image' => 'cover_images/default-book-cover.jpg', // Use a predefined default image
            'user_id' => User::factory(),
        ];
    }
}
