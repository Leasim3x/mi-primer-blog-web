<?php

namespace Database\Factories;

use app\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //randomNumber(5)
            'id_user' => $this->faker->randomNumber(1,20),
            'id_category' => $this->faker->randomNumber(1,20),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
        ];
    }
}