<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\ProductVariant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->randomElement(Order::pluck('id')->toArray()),
            'product_variant_id' => $this->faker->randomElement(ProductVariant::pluck('id')->toArray()),
            'Quantity' => $this->faker->numberBetween(1, 10),
            'UnitPrice' => $this->faker->randomFloat(2, 20000, 200000),
        ];
    }
}
