<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nota_legalController extends Controller
{
    public function inicio(){
        return view ("nota_legal");
    }
}
