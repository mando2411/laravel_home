<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {

    $products = Cache::remember('home_products', 300, function () {

        return DB::table('wp_posts as p')
            ->leftJoin('wp_postmeta as price', function ($join) {
                $join->on('p.ID', '=', 'price.post_id')
                     ->where('price.meta_key', '_price');
            })
            ->leftJoin('wp_postmeta as regular', function ($join) {
                $join->on('p.ID', '=', 'regular.post_id')
                     ->where('regular.meta_key', '_regular_price');
            })
            ->leftJoin('wp_postmeta as thumb', function ($join) {
                $join->on('p.ID', '=', 'thumb.post_id')
                     ->where('thumb.meta_key', '_thumbnail_id');
            })
            ->leftJoin('wp_posts as img', 'thumb.meta_value', '=', 'img.ID')
            ->where('p.post_type', 'product')
            ->where('p.post_status', 'publish')
            ->orderBy('p.post_date', 'desc')
            ->select(
                'p.ID',
                'p.post_title',
                'p.post_name',
                'price.meta_value as price',
                'regular.meta_value as regular_price',
                'img.guid as image'
            )
            ->limit(8)
            ->get();

    });

    return view('home', compact('products'));
});