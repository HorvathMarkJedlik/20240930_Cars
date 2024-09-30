<?php

use App\Http\Controllers\carController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/cars', [carController::class, 'showCars']);
