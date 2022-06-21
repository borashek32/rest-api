<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Album;

class ImageManipulationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'          => $this->faker->randomElement(['active', 'inactive']),
            'data'          => $this->faker->words(200, true),
            'name'          => $this->faker->words(2, true),
            'path'          => $this->faker->url,
            'output_path'   => $this->faker->url,
            'user_id'       => $this->faker->randomElement(User::pluck('id')->toArray()),
            'album_id'      => $this->faker->randomElement(Album::pluck('id')->toArray()),
            'created_at'    => now()
        ];
    }
}
