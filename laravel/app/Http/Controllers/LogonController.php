<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogonController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $login = $request->login;
        $senha = $request->senha;
    }
}
