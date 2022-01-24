<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $broj = random_int(1,50);
        return [
            'users_id'      =>  $broj,
            'payment_type'      => $this -> faker -> word(),
            'provider'      => $this -> faker ->  word(),
            'acc_number'      => null,
            'expiry'      => $this -> faker ->  date(),

        ];
    }
}