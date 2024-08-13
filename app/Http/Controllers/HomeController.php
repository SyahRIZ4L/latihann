<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('login');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function biodata(){
        return view('biodata');
    }
}

