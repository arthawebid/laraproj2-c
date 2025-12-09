<?php

// https://github.com/arthawebid/laraproj2-c

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\temansController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/temans',temansController::class);