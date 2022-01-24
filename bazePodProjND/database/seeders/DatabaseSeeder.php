<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(class: UserSeeder::class);
        $this->call(class: UserPaymentSeeder::class);    
        $this->call(class: UserAddressSeeder::class);
        $this->call(class: ShoppingSessionSeeder::class);
        $this->call(class: ProductCategorySeeder::class);
        $this->call(class: InventorySeeder::class);
        $this->call(class: ProductSeeder::class);
        $this->call(class: PaymentDetailSeeder::class);
        $this->call(class: CartItemSeeder::class);
        $this->call(class: OrderDetailSeeder::class);
        $this->call(class: OrderItemSeeder::class);
        
        // \App\Models\User::factory(10)->create();
        /*
        $users = [
            ['name' => 'Ivan', 'surname' => 'Lipak', 'username' => 'SimplyDepressed', 'email' => 'ilipak@vvg.hr', 'password' => 'ilipak'],
            ['name' => 'Shaquille', 'surname' => 'Oneal', 'username' => 'shaquille_oatmeal', 'email' => 'sot@vvg.hr', 'password' => 'sakil'],
            ['name' => 'Itis', 'surname' => 'meMario', 'username' => 'averagestudent', 'email' => 'luigiisbetter@vvg.hr', 'password' => 'wario']
        ];
        DB::table('users')->insert($users);


        $inventory = [
            ['quantity' => '5'],
            ['quantity' => '4'],
            ['quantity' => '11'],
            ['quantity' => '5'],
            ['quantity' => '7'],
            ['quantity' => '8']            
        ];
        DB::table('inventory')->insert($inventory);


        $user_info = [
            ['users_id' => '1', 'address1' => 'Prekopa', 'city' => 'Glina', 'post_nr' => '44400', 'country' => 'Hrvatska'],
            ['users_id' => '2', 'address1' => 'Utrine', 'city' => 'Zagreb', 'post_nr' => '10000', 'country' => 'Hrvatska'],
            ['users_id' => '3', 'address1' => 'Dubrava', 'city' => 'Zagreb', 'post_nr' => '10100', 'country' => 'Hrvatska']
        ];
        DB::table('user_address') -> insert($user_info);

        $kategorije = [
            ['cat_name' => 'Kat1', 'opis' => 'opis kategorije 1'],
            ['cat_name' => 'Kat2', 'opis' => 'opis kategorije 2'],
            ['cat_name' => 'Kat3', 'opis' => 'opis kategorije 3']
            ];
        DB::table('product_categories')->insert($kategorije);


        $proizvodi = [
            ['inventory_id' => '1','prod_name' => 'Proizvod 1', 'product_cat_id' => '1', 'opis' => 'nekakav opis ide ovdje za proizvod 1'],
            ['inventory_id' => '2','prod_name' => 'Proizvod 2','product_cat_id' => '1', 'opis' => 'nekakav opis ide ovdje za proizvod 2'],
            ['inventory_id' => '3','prod_name' => 'Proizvod 3','product_cat_id' => '2', 'opis' => 'nekakav opis ide ovdje za proizvod 3'],
            ['inventory_id' => '4','prod_name' => 'Proizvod 4','product_cat_id' => '2', 'opis' => 'nekakav opis ide ovdje za proizvod 4'],
            ['inventory_id' => '5','prod_name' => 'Proizvod 5','product_cat_id' => '3', 'opis' => 'nekakav opis ide ovdje za proizvod 5'],
            ['inventory_id' => '6','prod_name' => 'Proizvod 6','product_cat_id' => '3', 'opis' => 'nekakav opis ide ovdje za proizvod 6']

        ];
        DB::table('products') -> insert ($proizvodi);

        $us_pay = [
            ['users_id' => '1', 'payment_type' => 'Visa', 'provider' => 'PBZ', 'acc_number' => '9256548', 'expiry' => '2023-01-01'],
            ['users_id' => '2', 'payment_type' => 'Diners', 'provider' => 'ERSTE', 'acc_number' => '9256545', 'expiry' => '2023-02-01'],
            ['users_id' => '3', 'payment_type' => 'Pouzeće', 'provider' => 'OTP', 'acc_number' => '9256648', 'expiry' => '2023-03-01']
        ];
        DB::table('user_payments') -> insert ($us_pay);
        */


    }
}
