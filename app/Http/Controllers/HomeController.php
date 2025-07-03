<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function service()
    {
        return view('service');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }


    public function register()
    {
        return view('register');
    }
}
