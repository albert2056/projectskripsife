<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $url = "http://localhost:8080/api/login?email=$email&password=$password";

        $response = Http::post($url);
        $responseData = $response->json();
        if ($responseData['statusCode']!=null) {
            return redirect()->back()->withInput()->with('error', $responseData['description']);
        } else {
            $user = $this->getUserResponse($responseData);
            $request->session()->put('user',$user);
            if ($user->role == 'user') {
                return redirect('/');
            }
            return redirect('/transactionadmin');
        }
    }

    public function showLoginPage()
    {
        return view('user.Login');
    }

    protected function getUserResponse($responseData)
    {
        $user = new User();
        $user->id = $responseData['id'];
        $user->role = $responseData['role'];
        $user->name = $responseData['name'];
        $user->email = $responseData['email'];  
        $user->phoneNumber = $responseData['phoneNumber'];  
        return $user;
    }
}
