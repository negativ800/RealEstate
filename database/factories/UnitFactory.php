<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class UnitFactory extends Factory
{
    public function definition(): array
    {
        $components =['1,2,3,0', '2,3,1,1', '1,1,2,3'];
        $roomTypes =['appartment', 'sallon'];
        $for = [ 'Rent', 'sale'];
        return [
            'description' => fake()->text(),
            'address' => fake()->address(),
            'price' => fake()->numberBetween($min = 1000, $max = 100000),
            'type' => fake()->randomElement($roomTypes),
            'for_what' => fake()->randomElement($for),
            'date_of_posting' => fake()->date(),
            'is_available' => fake()->boolean(),
            'imag' => fake()->imageUrl(),
            'components' => fake()->randomElement($components),
            'posted_by' => fake()->numberBetween($min = 1, $max = 30),
            'feature_id' => fake()->numberBetween($min = 1, $max = 30),
        ];
    }
}
