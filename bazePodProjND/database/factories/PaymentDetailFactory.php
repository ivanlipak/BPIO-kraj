<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'to_pay'    => $this -> faker ->  randomFloat(2,1,1500),
            'status'    => $this -> faker ->  word(),
            'pay_prov_serv'        => $this -> faker ->  word()
        ];
    }
}