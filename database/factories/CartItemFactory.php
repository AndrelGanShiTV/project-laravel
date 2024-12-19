<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductVariant;
use App\Models\ShoppingCart;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_variant_id' => $this->faker->randomElement(ProductVariant::pluck('id')->toArray()),
            'shopping_cart_id' => $this->faker->randomElement(ShoppingCart::pluck('id')->toArray()),
            'Quantity' => $this->faker->numberBetween(1, 10),
            'UnitPrice' => $this->faker->randomFloat(2, 20000, 200000),
        ];
    }
}
