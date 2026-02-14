<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $products = DB::table('wp_posts')
        ->where('post_type', 'product')
        ->where('post_status', 'publish')
        ->orderBy('post_date', 'desc')
        ->limit(8)
        ->get();

    return view('home', compact('products'));
});