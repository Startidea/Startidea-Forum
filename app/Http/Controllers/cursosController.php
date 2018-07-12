<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function inicio()
    {
        return view ('cursos');
    }
}
