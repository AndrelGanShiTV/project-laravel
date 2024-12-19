<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
            'TotalAmount' => $this->faker->randomFloat(2, 20000, 800000),
            'OrderStatus' => $this->faker->randomElement(['Pending', 'Processing', 'Completed', 'Declined']),
            'PaymentMethod' => $this->faker->creditCardType(),
            'ShippingAddress' => $this->faker->address,
        ];
    }
}
