<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('signin');
    }
    public function store(Request $request)
    {
        //
    }
}