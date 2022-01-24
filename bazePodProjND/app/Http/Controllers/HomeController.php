<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
        //ode tražiti u view folder i traži dashboard, ne treba pisati view('dashboard.blade.php')
    }
}
