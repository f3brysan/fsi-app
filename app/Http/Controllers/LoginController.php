<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('auth');
    }

    public function auth (Request $request){

        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
            'captcha' => ['required', 'captcha'],
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],           
        ]);

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('beranda');
        }
        
        return back()->with('LoginError','Login Gagal !' );
    }

}
