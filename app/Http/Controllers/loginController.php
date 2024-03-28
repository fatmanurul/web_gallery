<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('authenticate.login');
    }

    public function register (){
        return view('authenticate.register');
    }


    public function authenticate(Request $request)
    { 

    }


    public function logout(){
        
    }

    public function username()
    {
        
    }
}
