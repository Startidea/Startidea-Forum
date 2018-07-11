<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class politica_privacidadController extends Controller
{
    public function inicio(){
        return view ("politica_privacidad");
    }
}
