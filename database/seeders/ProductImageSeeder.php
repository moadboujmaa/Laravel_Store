<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;
use Faker\Factory as Faker;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i<250; $i++) {
            $faker = Faker::create();
            ProductImage::create([
                'product_id' => $faker->numberBetween(1, 100),
                'image_path' => $faker->imageUrl(650, 650)
            ]);
        }
    }
}
