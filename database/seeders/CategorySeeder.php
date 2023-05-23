<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        Category::create([
            'name' => 'Clothes',
            'avatar' => $faker->imageUrl(300, 300),
        ]);
        Category::create([
            'name' => 'Toys',
            'avatar' => $faker->imageUrl(300, 300),
        ]);
        Category::create([
            'name' => 'Jewelry',
            'avatar' => $faker->imageUrl(300, 300),
        ]);
        Category::create([
            'name' => 'Phones',
            'avatar' => $faker->imageUrl(300, 300),
        ]);
        Category::create([
            'name' => 'Snacks',
            'avatar' => $faker->imageUrl(300, 300),
        ]);
        Category::create([
            'name' => 'Kitchen',
            'avatar' => $faker->imageUrl(300, 300),
        ]);
    }
}
