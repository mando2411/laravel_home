<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Models\WooProduct;

Route::get('/', function () {

    $products = WooProduct::where('post_type', 'product')
        ->where('post_status', 'publish')
        ->latest()
        ->take(8)
        ->get();

    return view('home', compact('products'));
});