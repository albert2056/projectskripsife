<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index() {
        $response = Http::get('http://localhost:8080/api/user/findAll');
        $users = $response->json();

        return view('home', compact('users'));
    }
}
