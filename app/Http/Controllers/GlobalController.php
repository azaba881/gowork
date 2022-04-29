<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index1()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function blog()
    {
        return view('blog');
    }
}
