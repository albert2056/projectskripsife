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
        $responseData = $response->json();
    
        if ($responseData['statusCode']==null) {
            return redirect()->intended('/signin');
        } else {
            return redirect()->back()->withInput()->with('error', $responseData['description']);
        }
    }

    public function showRegisterPage()
    {
        return view('user.Register');
    }

}
