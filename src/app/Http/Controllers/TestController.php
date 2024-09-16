<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $isAuthenticated = Auth::check();
        return view('index', ['isAuthenticated' => $isAuthenticated]);
    }

    public function main()
    {
        return view('main');
    }
}
