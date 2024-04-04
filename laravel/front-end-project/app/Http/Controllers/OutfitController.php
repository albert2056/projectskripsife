<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function showOutfitChoosePage() {
        return view('outfitChoose');
    }

    public function showOutfitByOutfitCategoryIdPage() {
        return view('outfitCategory');
    }

    public function showOutfitPreview() {
        return view('outfitCategoryPreview');
    }

    public function showOutfitByCategoryId() {
        return view();
    }
}

