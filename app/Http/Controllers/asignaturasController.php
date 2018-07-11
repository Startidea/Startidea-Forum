<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asignaturasController extends Controller
{
    public function inicio(){
        return view ("asignaturas");
    }
}
