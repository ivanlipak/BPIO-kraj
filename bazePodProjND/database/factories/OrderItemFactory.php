<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'    => random_int(1,100),
            'product_id'    => random_int(1,100),
            'amount'        => random_int(1,5)
        ];
    }
}