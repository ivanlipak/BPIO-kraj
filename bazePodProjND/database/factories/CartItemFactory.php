<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $broj = random_int(1,50);
        $broj2 = random_int(1,50);
        return [
            'session_id'    => $broj,
            'product_id'    => $broj2,
            'amount'        => $this -> faker ->  randomDigit()
        ];
    }
}