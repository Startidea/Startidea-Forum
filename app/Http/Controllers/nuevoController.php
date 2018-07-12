<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuevoController extends Controller
{
    public function inicio()
    {
        return view ('nuevo');
    }
}
