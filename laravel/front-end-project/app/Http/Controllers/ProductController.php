<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index() {
        $response = Http::get('http://localhost:8080/api/product/findAll');
        $products = $response->json();

        return view('home', compact('products'));
    }
}
