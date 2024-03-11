<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\UserRequest;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $userRequest = new UserRequest();
        $userRequest->roleId = 2;
        $userRequest->name = $request['name'];
        $userRequest->phoneNumber = $request['phone'];
        $userRequest->email = $request['email'];
        $userRequest->password = $request['password'];
    
        $response = Http::post('http://localhost:8080/api/user/create', $userRequest->toArray());
    
        if ($response->successful()) {
            return redirect()->intended('/signin');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to register user. Please try again.');
        }
    }

    public function signup()
    {
        return view('user.Register');
    }

}
