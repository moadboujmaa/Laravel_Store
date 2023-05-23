<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'name' => $faker->word(),
            'description' => $faker->paragraph,
            'price' => $faker->numberBetween(25, 1000),
            'stock' => $faker->numberBetween(10, 500),
            'category_id' => $faker->numberBetween(1, 6)
        ];
    }
}
