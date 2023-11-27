<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
