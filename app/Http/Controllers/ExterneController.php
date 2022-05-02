<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Externe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ExterneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $externe = DB::table('externes')
        ->get();
        return view('admin/externe',compact('externe',$externe));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $affiche = $request->file('affiche');  
        $afficheName = time().'.'.$affiche->getClientOriginalExtension();
        $affiche->move(public_path('externe/affiche/upload/posted'), $afficheName);
        $actualPath = 'externe/affiche/upload/posted/'.$afficheName;

        $externe = new Externe();
        $externe->affiche = $actualPath;  
        $externe->title = request('title'); 
        $externe->domaine = request('domaine');
        $externe->nombre = request('nombre');
        $externe->description = request('description');
        $externe->site = request('site');
        $externe->expiration = request('expiration');
        $externe->save(); 
        return redirect('/externes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
