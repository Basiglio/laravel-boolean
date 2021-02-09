<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class HomeController extends Controller
{
    public function index() {

        $cars = Cars::all();
        dump($cars);
        // QUI METTO LA CALLBACK CON IL RETURN DEL WEB.PHP
        return view('home');
    }

    
    
}
