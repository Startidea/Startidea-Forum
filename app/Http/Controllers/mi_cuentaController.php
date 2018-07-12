<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mi_cuentaController extends Controller
{
    public function inicio()
    {
        return view ('mi-cuenta');
    }
}
