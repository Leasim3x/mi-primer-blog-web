<?php

namespace Database\Factories;

use app\Models\Comment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_user' => $this->faker->randomNumber(1,20),
            'id_post' => $this->faker->randomNumber(1,10),
            'comment' => $this->faker->sentence(10),
        ];
    }
}
