<?php

namespace App\Http\Controllers;
use App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function attemptLogin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = Auth::attempt($login);

        /* if $user is false (invalid credentials) */
        if(!$user)
        {
            return redirect()->route('auth.login');
        }

        return redirect()->route('dashboard');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect()->route('dashboard');
    }

    public function register()
    {
        return view('auth.register');
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    protected function create(array $data)
    {
        [
            'name' => $data['name'],
            'surname' => $data['surname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
