<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = \App\ProductCategory::pluck('id');

        foreach ($categories as $categoryId) {
            factory(\App\Product::class)->times(rand(1200, 2800))->create([
                'category_id' => $categoryId,
            ]);
        }
    }
}
