<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|max:200|unique:users|min:5',
            'email'  => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

      $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Register Berhasil, Silakan Login untuk melanjutkan..');
    }
}
