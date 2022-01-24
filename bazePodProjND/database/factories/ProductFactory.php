<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prod_name'              => $this->faker  -> word(),
            'inventory_id'           => random_int(1,10),
            'product_cat_id'          => random_int(1,10),
            'opis'              => $this->faker  -> sentence(5)

        ];
    }
}