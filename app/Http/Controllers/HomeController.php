<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// QUI FACCIO L'INCLUDE DEL MODEL CON IL DATABASE
use App\Cars;

class HomeController extends Controller
{
    public function index() {

        // QUI SALVO (TUTTO) IL DATABASE IN UNA VARABILE
        $cars = Cars::all();

        // QUI METTO LA CALLBACK CON IL RETURN DELLA MIA PAGINA E DEL DATABASE
        return view('home', compact('cars'));
    }
}
