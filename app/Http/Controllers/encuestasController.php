<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuestasController extends Controller
{
    public function inicio(){
        return view ("encuestas");
    }
}
