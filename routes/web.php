<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| TEST DATABASE (مؤقت للاختبار)
|--------------------------------------------------------------------------
*/
Route::get('/test-db', function () {
    return config('database.connections.mysql');
});