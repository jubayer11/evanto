<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\Role::create([
            'name' => 'wholesaler',
        ]);
        \App\Role::create([
            'name' => 'retailer',
        ]);
        \App\Role::create([
            'name' => 'salesman',
        ]);
        \App\User::create([
            'name' => 'jubayer',
            'email' => 'jubayer@jubayerahmed.com',
            'password' => '$2y$10$uRnaLKVZV8A89z7utkbiQeCYhAvCKwDTwlXcEBg43UrzLylWT8Nfi',  //password
            'role_id' => 1,
            'address' => 'c block,Bashundhara dhaka'
        ]);
        \App\User::create([
            'name'=>'shetu',
            'email'=>'shetu@gmail.com',
            'password'=>'$2y$10$uRnaLKVZV8A89z7utkbiQeCYhAvCKwDTwlXcEBg43UrzLylWT8Nfi',  //password
            'role_id'=>2,
            'address'=>'2 block,Mohammadpur,dhaka'
        ]);
        \App\User::create([
            'name'=>'evanto',
            'email'=>'evanto@gmail.com',
            'password'=>'$2y$10$uRnaLKVZV8A89z7utkbiQeCYhAvCKwDTwlXcEBg43UrzLylWT8Nfi',  //password
            'role_id'=>3,
            'address'=>'2 block,Gulshan,dhaka'
        ]);
        \App\Product::create([
            'category_id'=>'1',
            'product_type'=>'mobile',
            'name'=> 'one plus 3',
            'quantity'=> 10,
            'barcode'=> 1234,
        ]);
        \App\Product::create([
            'category_id'=>'2',
            'product_type'=>'mobile',
            'name'=> 's20',
            'quantity'=> 10,
            'barcode'=> 12345,
        ]);
        \App\Product::create([
            'category_id'=>'3',
            'product_type'=>'mobile',
            'name'=> 'mi4',
            'quantity'=> 10,
            'barcode'=> 123456,
        ]);
        \App\Product::create([
            'category_id'=>'4',
            'product_type'=>'mobile',
            'name'=> 'xperia z',
            'quantity'=> 10,
            'barcode'=> 1234567,
        ]);
        \App\Product::create([
            'category_id'=>'5',
            'product_type'=>'mobile',
            'name'=> 'iphone 11pro',
            'quantity'=> 10,
            'barcode'=> 12345678,
        ]);
        \App\Category::create([
            'name'=>'One Plus'
        ]);
        \App\Category::create([
            'name'=>'Samsung'
        ]);
        \App\Category::create([
            'name'=>'Xiaomi'
        ]);
        \App\Category::create([
            'name'=>'Sony'
        ]);
        \App\Category::create([
            'name'=>'Iphone'
        ]);
        \App\User_Product::create([
            'user_id'=>1,
            'product_id'=>1,
        ]);
        \App\User_Product::create([
            'user_id'=>1,
            'product_id'=>2,
        ]);
        \App\User_Product::create([
            'user_id'=>2,
            'product_id'=>3,
        ]);
        \App\User_Product::create([
            //
            'user_id'=>2,
            'product_id'=>4,
        ]);
        \App\User_Product::create([
//
            'user_id'=>3,
            'product_id'=>5,
        ]);
        \App\Invoice::create([
            //
            'transaction_id'=>123456,
            'user_id'=>2,
            'total_amount'=>5000,
            'paid_amount'=>5000,
            'due'=>0,
        ]);
        \App\Invoice::create([
            'transaction_id'=>1234567,
            'user_id'=>2,
            'total_amount'=>15000,
            'paid_amount'=>15000,
            'due'=>0,
        ]);
        \App\Invoice::create([
            'transaction_id'=>12345678,
            'user_id'=>2,
            'total_amount'=>25000,
            'paid_amount'=>25000,
            'due'=>0,
        ]);
        \App\Invoice::create([
            //
            'transaction_id'=>123456789,
            'user_id'=>3,
            'total_amount'=>800,
            'paid_amount'=>800,
            'due'=>0,
        ]);
        \App\Invoice::create([
            //
            'transaction_id'=>1234567810,
            'user_id'=>3,
            'total_amount'=>800,
            'paid_amount'=>800,
            'due'=>0,
        ]);
        \App\Invoice_Product::create([
            //
            'invoice_id'=>1,
            'product_id'=>5,
            'quantity'=>2,
        ]);
        \App\Invoice_Product::create([
            'invoice_id'=>2,
            'product_id'=>4,
            'quantity'=>3,
        ]);
        \App\Invoice_Product::create([
            'invoice_id'=>3,
            'product_id'=>3,
            'quantity'=>4,

        ]);
        \App\Invoice_Product::create([
            //
            'invoice_id'=>4,
            'product_id'=>2,
            'quantity'=>5,
        ]);
        \App\Invoice_Product::create([
            //
            'invoice_id'=>5,
            'product_id'=>1,
            'quantity'=>1,
        ]);


    }
}
