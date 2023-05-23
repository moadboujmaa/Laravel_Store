<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 1; $i <= 100; $i++) {
            Product::create([
                'name' => $faker->word(),
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween(25, 1000),
                'stock' => $faker->numberBetween(10, 500),
                'category_id' => $faker->numberBetween(1, 6)
            ]);
        }
    }
}
