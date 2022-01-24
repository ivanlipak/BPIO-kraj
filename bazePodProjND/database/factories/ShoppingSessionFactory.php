<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShoppingSessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'users_id'      => random_int(1,100),
            'total'         => $this -> faker -> randomFloat(2,1,1500)
        ];
    }
}