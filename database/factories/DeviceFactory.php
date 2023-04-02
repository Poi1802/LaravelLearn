<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->domainWord(),
            'price' => $this->faker->numberBetween(200, 20000),
            'description' => $this->faker->text(30),
            'brand' => $this->faker->word(),
            'category_id' => Category::get()->random()->id
        ];
    }
}