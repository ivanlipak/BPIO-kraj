<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
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
            'users_id'      => $broj,
            'payment_id'      => $broj2,
            'total_price'      => $this -> faker ->  randomFloat(2,1,1500)
        ];
    }
}