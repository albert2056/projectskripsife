<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GownController extends Controller
{
    public function gownChooseIndex() {
        return view('gownChoose');
    }
}
