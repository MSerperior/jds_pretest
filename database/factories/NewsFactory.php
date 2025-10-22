<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'news_title' => fake()->text(),
            'news_content' => fake()->paragraphs(3, true),
            'news_image' => fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
