<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login($slug)
    {
        return view('login',compact('slug'));
    }

    public function studentRegister()
    {
        return view('register.student_register');
    }
}
