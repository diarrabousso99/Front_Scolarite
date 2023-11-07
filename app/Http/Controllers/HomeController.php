<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('gestion.home');
    }

    public function login()
    {
        // User::create([
        //     'email'=>'dbdieng99@gmail.com',
        //     'name'=>'diarra',
        //     'password'=>Hash::make('passer'),
        // ]);

        return view('auth.login');
    }
    public function goLogin(LoginRequest $request)
    {

        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return to_route('auth.login')->withErrors([
            'email'=>'Email invalide',

        ])->onlyInput('email') ;
       }
}
