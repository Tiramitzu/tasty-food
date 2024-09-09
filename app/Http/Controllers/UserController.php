<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // if (empty(auth()->user())) {
        //     return redirect()->route('home');
        // }

        // return 'Ini adalah halaman admin';
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('tentang');
        }

        return view('auth.login');
    }

    public function proc_login()
    {
        $data = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($data)) {
            return redirect()->route('tentang');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
