<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::user()){
            // if ($user->level == '1') {
            //     return redirect()->intended('beranda');
            // }elseif($user->level == '2'){
            //     return redirect()->intended('client');
            // }
            return redirect()->intended('home');
        }

        return view('login.view_login');
    }


    public function proses(Request $request)
    {
       $request->validate([
        'username' => 'required',
        'password' => 'required'
       ]);

       $kredensial = $request->only('username', 'password');

       if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
            $user = Auth::user();
            // if($user = Auth::user()){
            //     if ($user->level == '1') {
            //         return redirect()->intended('beranda');
            //     }elseif($user->level == '2'){
            //         return redirect()->intended('client');
            //     }
            // }

            if ($user) {
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
       }

       return back()->withErrors([
        'username' => 'Maaf Username atau Password anda Salah..!',
       ])->onlyInput('username');
       
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
}
}
