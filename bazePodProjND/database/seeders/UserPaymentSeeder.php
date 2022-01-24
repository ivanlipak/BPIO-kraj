<?php

namespace Database\Seeders;

use App\Models\UserPayment;
use Illuminate\Database\Seeder;

class UserPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPayment::factory()->times(100)->create();
    }
}
