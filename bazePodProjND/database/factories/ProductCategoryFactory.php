<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cat_name'      => $this -> faker ->  word(),
            'opis'      => $this -> faker ->  sentence(5)
        ];
    }
}