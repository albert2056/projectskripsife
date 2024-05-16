<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    public function showHomePage() {
        // $response = Http::get('http://localhost:8080/api/user/findAll');
        // $users = $response->json();

        return view('home');
    }

    public function signout() {
        Session::flush();

        return redirect('/');
    }
}
