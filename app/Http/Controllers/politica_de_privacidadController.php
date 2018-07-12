<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class politica_de_privacidadController extends Controller
{
    public function inicio()
    {
        return view ('politica-de-privacidad');
    }
}
