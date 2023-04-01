<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
            'user_id' => User::get()->random()->id,
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->text(100),
            'likes' => random_int(1, 500),
            'img' => $this->faker->imageUrl(),
            'publ' => 1,
            'category_id' => Category::get()->random()->id
        ];
    }
}