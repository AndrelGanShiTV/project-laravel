<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductVariant;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    protected $model = ProductVariant::class;
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->randomElement(Product::pluck('id')->toArray()),
            'Color' => $this->faker->colorName(),
            'Size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'StockQuantity' => $this->faker->numberBetween(1, 40),
        ];
    }
}
