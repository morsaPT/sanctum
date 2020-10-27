<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function doLogin()
    {

        $credentials = ['email' => 'admin@admin.com', 'password' => 'password'];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return response()->json(['status' => 200, 'message' => 'Logged in! ']);
        }

        return response()->json(['status' => 401, 'message' => 'No way...']);

    }
}
