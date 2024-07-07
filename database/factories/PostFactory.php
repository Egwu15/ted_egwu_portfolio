<?php

namespace Database\Factories;

use illuminate\Support\Str;
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
        return [
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'content' => $this->faker->paragraphs(4, true),
            'imageUrl' => $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 3),
            'user_id' => 1,
            'is_published' => $this->faker->boolean,
            'published_at' => $this->faker->dateTimeBetween('-1 month', '+3 days'),
            'views' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
