<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Movie::factory( 20)->create();

        \App\Models\Genre::factory( 5)->create();

        $genres = \App\Models\Genre::all();

        \App\Models\Movie::all()->each(function ($movie) use ($genres) {
            $movie->genres()->attach(
                $genres->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

    }
}
