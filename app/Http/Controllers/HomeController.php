<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function about()
    {
        return view('about');
    }
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('create');
    }
    public function login()
    {
        return view('login');
    }
}
