<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductCategory::class)->create([
            'title'=>'Cursos de Laravel',
        ]);

        factory(\App\ProductCategory::class)->times(49)->create([]);
    }
}
