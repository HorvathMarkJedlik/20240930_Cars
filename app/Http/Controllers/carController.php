<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carController extends Controller
{
    function showCars(){

        return view('cars');
    }
}
