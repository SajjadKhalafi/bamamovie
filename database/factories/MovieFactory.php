<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->title;
        $tmdb_id = fake()->unique()->randomNumber();
        return [
            'tmdb_id' => $tmdb_id,
            'title' => $title,
            'original_title' => $title,
            'slug' => Str::slug($tmdb_id . '-' . $title),
            'poster_path' => fake()->imageUrl() ,
            'runtime' => fake()->numberBetween(65,250),
            'overview' => fake()->text,
            'popularity' => fake()->numberBetween(0,100000000),
            'vote_average' => fake()->numberBetween(0,100),
            'vote_count' => fake()->randomNumber(null),
            'status' => 'Released',
            'tagline' => fake()->sentence,
            'budget' => fake()->numberBetween(1000000, 1000000000),
            'revenue' => fake()->numberBetween(1000000, 1000000000),
            'adult' => fake()->boolean,
            'release_date' => fake()->date('Y-m-d h:m:s')
        ];
    }

}
