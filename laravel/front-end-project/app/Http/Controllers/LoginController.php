<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $url = "http://localhost:8080/api/login?email=$email&password=$password";

        $response = Http::post($url);
        logger()->info('API Response:', ['response' => $response->body()]);
        if ($response->successful()) {
            $responseData = $response->json();

            if (isset($responseData['errorResponse'])) {
                return redirect('/err');
            }

            return redirect('/');
        }
        else {
            return redirect('/err');
        }
    }

    public function signin()
    {
        return view('user.Login');
    }
}
