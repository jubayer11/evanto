<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define( \App\User::class, function (Faker $faker) {
    return [
        //
        'name'=>'jubayer',
        'email'=>'jubayer@jubayerahmed.com',
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  //password
        'role_id'=>1,
         'address'=>'c block,Bashundhara dhaka'

    ];
});
$factory->define( \App\User::class, function (Faker $faker) {
    return [
        //
        'name'=>'shetu',
        'email'=>'shetu@gmail.com',
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  //password
        'role_id'=>2,
        'address'=>'2 block,Mohammadpur,dhaka'

    ];
});
$factory->define( \App\User::class, function (Faker $faker) {
    return [
        //
        'name'=>'evanto',
        'email'=>'evanto@gmail.com',
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  //password
        'role_id'=>3,
        'address'=>'2 block,Gulshan,dhaka'

    ];
});
$factory->define( \App\Role::class, function (Faker $faker) {
    return [
        //
        'name'=>'wholesaler',
    ];
});
$factory->define( \App\Role::class, function (Faker $faker) {
    return [
        //
        'name'=>'retailer',
    ];
});
$factory->define( \App\Role::class, function (Faker $faker) {
    return [
        //
        'name'=>'salesman',
    ];
});
$factory->define( \App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=>'1',
        'product_type'=>'mobile',
        'name'=> 'one plus 3',
        'quantity'=> 10,
        'barcode'=> 1234,
    ];
});
$factory->define( \App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=>'2',
        'product_type'=>'mobile',
        'name'=> 's20',
        'quantity'=> 10,
        'barcode'=> 12345,
    ];
});
$factory->define( \App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=>'3',
        'product_type'=>'mobile',
        'name'=> 'mi4',
        'quantity'=> 10,
        'barcode'=> 123456,
    ];
});
$factory->define( \App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=>'4',
        'product_type'=>'mobile',
        'name'=> 'xperia z',
        'quantity'=> 10,
        'barcode'=> 1234567,
    ];
});
$factory->define( \App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=>'5',
        'product_type'=>'mobile',
        'name'=> 'iphone 11pro',
        'quantity'=> 10,
        'barcode'=> 12345678,
    ];
});
$factory->define( \App\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>'One Plus'
    ];
});
$factory->define( \App\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>'Samsung'
    ];
});
$factory->define( \App\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>'Xiaomi'
    ];
});
$factory->define( \App\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>'Sony'
    ];
});
$factory->define( \App\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>'Iphone'
    ];
});
$factory->define( \App\User_Product::class, function (Faker $faker) {
    return [
        //
        'user_id'=>1,
        'product_id'=>1,
    ];
});
$factory->define( \App\User_Product::class, function (Faker $faker) {
    return [
        //
        'user_id'=>1,
        'product_id'=>2,
    ];
});
$factory->define( \App\User_Product::class, function (Faker $faker) {
    return [
        //
        'user_id'=>2,
        'product_id'=>3,
    ];
});
$factory->define( \App\User_Product::class, function (Faker $faker) {
    return [
        //
        'user_id'=>2,
        'product_id'=>4,
    ];
});
$factory->define( \App\User_Product::class, function (Faker $faker) {
    return [
        //
        'user_id'=>3,
        'product_id'=>5,
    ];
});
$factory->define( \App\Invoice::class, function (Faker $faker) {
    return [
        //
        'transaction_id'=>123456,
        'user_id'=>2,
        'total_amount'=>5000,
        'paid_amount'=>5000,
        'due'=>0,
    ];
});
$factory->define( \App\Invoice::class, function (Faker $faker) {
    return [
        //
        'transaction_id'=>1234567,
        'user_id'=>2,
        'total_amount'=>15000,
        'paid_amount'=>15000,
        'due'=>0,
    ];
});

$factory->define( \App\Invoice::class, function (Faker $faker) {
    return [
        //
        'transaction_id'=>12345678,
        'user_id'=>2,
        'total_amount'=>25000,
        'paid_amount'=>25000,
        'due'=>0,
    ];
});
$factory->define( \App\Invoice::class, function (Faker $faker) {
    return [
        //
        'transaction_id'=>123456789,
        'user_id'=>3,
        'total_amount'=>400,
        'paid_amount'=>400,
        'due'=>0,
    ];
});
$factory->define( \App\Invoice::class, function (Faker $faker) {
    return [
        //
        'transaction_id'=>123456789,
        'user_id'=>3,
        'total_amount'=>800,
        'paid_amount'=>800,
        'due'=>0,
    ];
});
$factory->define( \App\Invoice_Product::class, function (Faker $faker) {
    return [
        //
        'invoice_id'=>1,
        'product_id'=>5,
        'quantity'=>2,

    ];
});
$factory->define( \App\Invoice_Product::class, function (Faker $faker) {
    return [
        //
        'invoice_id'=>2,
        'product_id'=>4,
        'quantity'=>3,

    ];
});
$factory->define( \App\Invoice_Product::class, function (Faker $faker) {
    return [
        //
        'invoice_id'=>3,
        'product_id'=>3,
        'quantity'=>4,

    ];
});
$factory->define( \App\Invoice_Product::class, function (Faker $faker) {
    return [
        //
        'invoice_id'=>4,
        'product_id'=>2,
        'quantity'=>5,

    ];
});
$factory->define( \App\Invoice_Product::class, function (Faker $faker) {
    return [
        //
        'invoice_id'=>5,
        'product_id'=>1,
        'quantity'=>1,

    ];
});
