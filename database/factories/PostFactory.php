<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $string = $this->faker->words(4, true);
        return [
            'slug' => \Str::of($string)->slug('-'),
            'title' => ucfirst($string),
            'body' => ucfirst($this->faker->sentence(4, true)),
            'user_id' => User::factory(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
