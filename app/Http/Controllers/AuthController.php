<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('modules/auth/login');
    }



    public function registro(){
        return view('modules/auth/register');
    }

    public function registrar(Request $request){
        $item = new User();
        $item->name = request('name');
        $item->email = request('email');
        $item->password = Hash::make($request->password);
        $item->save();  
        return to_route('login');
    }

    public function logear(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return to_route('home');
        } else {
            return to_route('login');
        } 
    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }

    public function home(){
        return view('modules/dashboard/home');
    }

    public function forgot_password(){
        return view('modules/auth/forgot-password');
    }

    public function ayuda(){
        return view('modules/auth/ayuda');
    }
}

