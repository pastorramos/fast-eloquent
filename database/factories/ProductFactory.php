<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'slug' => $faker->slug(4),
        'category_id' => factory(\App\ProductCategory::class),
        'description' => $faker->paragraph,
        'page_title' => $faker->sentence,
        'meta_description' => $faker->sentence,
        'featured' => $faker->boolean,
        'image' => sprintf('img%s.jpg', $faker->numberBetween(1, 5)),
        'status' => $faker->randomElement(['draft', 'pending', 'published']),
    ];
});
