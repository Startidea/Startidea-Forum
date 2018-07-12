<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otros_profesoresController extends Controller
{
    public function inicio()
    {
        return view ('otros-profesores');
    }
}
