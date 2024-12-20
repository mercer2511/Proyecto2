<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

