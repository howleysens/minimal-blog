<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $thumbnailValues = [
            fake()->imageUrl(),
            null,
        ];

        return [
            'title' => fake()->realText(rand(25, 50)),
            'body' => fake()->realText(rand(600, 2000)),
            'thumbnail' => $thumbnailValues[array_rand($thumbnailValues)],
        ];
    }
}
