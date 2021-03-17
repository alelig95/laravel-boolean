<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class listController extends Controller
{
    public function index() {

      $cars = Car::all();
      // dump($cars);

      return view('list', ['cars' => $cars]);
    }
}
