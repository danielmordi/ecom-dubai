<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->randomFloat(2, 100, 500);
        $discountPrice = $price + ($price * 0.35);
        $cat_id = $this->faker->randomElements($array = array(1,2,3,4,5,6,7,8,9,10), $count = rand(1, 3));
        $productName = $this->faker->name();
        $slug = Str::slug($productName);

        return [
            'product_image' => $this->faker->image('public/uploads',400,300, null, false),
            'product_name' => $productName,
            'slug' => $slug,
            'product_price' => $price,
            'discounted_price' => $discountPrice,
            'product_sold' => $this->faker->numberBetween($min = 10, $max = 100),
            'product_stock_conut' => $this->faker->numberBetween($min = 10, $max = 100),
            'product_description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];

    }
}
