<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ProductName' => $this->faker->word(),
            'ProductDescription' => $this->faker->text,
            'Price' => $this->faker->randomFloat(0, 20000, 200000),
            'OtherAttributes' => json_encode([
                'weight' => $this->faker->numberBetween(5, 1000) . 'g',
                'material' => $this->faker->word,
            ])
        ];
    }
}
