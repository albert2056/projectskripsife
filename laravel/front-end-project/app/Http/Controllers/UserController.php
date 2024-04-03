<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function showUserHomePage() {
        // $response = Http::get('http://localhost:8080/api/user/findAll');
        // $users = $response->json();

        return view('home');
    }

    public function showAdminHomePage() {
        // $response = Http::get('http://localhost:8080/api/user/findAll');
        // $users = $response->json();

        return view('home');
    }

    public function userHome() {
        logger()->info('User req in dsvdsvdsv2:', ['user' => session()->get('user')]);
        if(session()->has('user')) {
            $user = session()->get('user'); 
            if($user['role'] == 'user') { 
                return view('user.userhome', compact('user')); 
            }
        } else {
            return redirect('/');
        }
    }

    public function adminHome() {
        logger()->info('Admin req in dsvdsvdsv2:', ['user' => session()->get('user')]);
        if(session()->has('user')) {
            $user = session()->get('user'); 
            if($user['role'] == 'admin') { 
                return view('adminhome', compact('user')); 
            }
        } else {
            return redirect('/');
        }
    }

    public function signout() {
        Session::flush();

        return redirect('/');
    }
}
