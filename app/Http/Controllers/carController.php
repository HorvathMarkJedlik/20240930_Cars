<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class carController extends Controller
{
    private $cars;

    function __construct()
    {
        // $this->cars = [
        //     'Ford',
        //     'BMW',
        //     'Mercedes'
        // ];

        $this->cars =  Storage::json('cars2.json')["cars"];
    }

    function showCars(){

        return view('cars', ['cars' => $this->cars]);
    }
}
