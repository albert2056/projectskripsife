<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function showOutfitChoosePage() {
        return view('outfitChoose');
    }

    public function showOutfitByCategoryId() {
        return view();
    }
}

