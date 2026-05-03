<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['verify.shopify'])->get('/', function () {
    return view('dashboard');
});
