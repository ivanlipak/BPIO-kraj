<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'users_id'      => random_int(1,50),
            'address1'      => $this -> faker ->  word(),
            'address2'      => null,
            'city'      => $this -> faker ->  word(),
            'post_nr'      => $this -> faker ->  randomNumber(5),
            'country'      => $this -> faker ->  word(),
        ];
    }
}