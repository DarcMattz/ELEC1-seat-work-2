<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('item/{item_no?}/{name?}/{price?}', function ($item_no = '101', $name = 'Tomato', $price = '10.0') {
    return view('item', ['item_no' => $item_no, 'name' => $name, 'price' => $price]);
})->name('item');

Route::get('customer/{customer_id?}/{name?}/{address?}', function ($customer_id = '101', $name = 'John Virgil Carvajal', $address = 'Bolinao') {
    return view('customer', ['customer_id' => $customer_id, 'name' => $name, 'address' => $address]);
})->name('customer');

Route::get('order/{customer_id?}/{name?}/{order_no?}/{date?}', function ($customer_id = '101', $name = 'John Virgil Carvajal', $order_no = '1000', $date = 'February 23, 2024') {
    return view('order', ['customer_id' => $customer_id, 'name' => $name, 'order_no' => $order_no, 'date' => $date]);
})->name('order');

Route::get('orderDetails/{transNo?}/{order_no?}/{item_id?}/{name?}/{price?}/{qty?}', function ($transNo = '1010', $order_no = '1000', $item_id = '101', $name = 'John Virgil Carvajal', $price = '10.0', $qty = '9999') {
    return view('orderDetails', ['transNo' => $transNo, 'order_no' => $order_no, 'item_id' => $item_id, 'name' => $name, 'price' => $price, 'qty' => $qty]);
})->name('orderDetails');
