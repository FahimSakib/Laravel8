<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->unique()->name,
            'product_code' => rand(111,999),
            'brand_id'     => Brand::factory(),
            'category_id'  => Category::factory(),
            'price'        => rand(10,100),
            'qty'          => rand(100,500),
            'min_qty'      => rand(1,100),
            'max_qty'      => rand(20,200),
        ];
    }
}
