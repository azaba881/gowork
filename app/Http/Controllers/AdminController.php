<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/index');
    }

    public function entreprise()
    {
        $entreprise = DB::table('entreprises')->get();       
        return view('admin/entreprise',compact('entreprise',$entreprise));
    }

    public function travailleur()
    {
        $travailleur = DB::table('travailleurs')->get();       
        return view('admin/travailleur',compact('travailleur',$travailleur));
    }

}
