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
    public function definition()
    {
        return [
            'titre'=>$this->faker->sentence(rand(1,4),true),
            'description'=>$this->faker->sentences(rand(2,5),true),
            'contenue'=>$this->faker->sentences(rand(6,9),true)
        ];
    }
}
