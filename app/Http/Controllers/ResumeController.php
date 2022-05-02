<?php

namespace App\Http\Controllers;
use App\Models\Resume; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class ResumeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resume = $request->file('fichier');  
        $resumeName = time().'.'.$resume->getClientOriginalExtension();
        $resume->move(public_path('document/resume/upload/posted'), $resumeName);
        $actualPath = '/document/resume/upload/posted/'.$resumeName;

        $resume = new Resume();
        $resume->user_id = Auth::user()->id;
        $resume->fichier = $actualPath;        
        $resume->save();                    
        return redirect('/cvs');
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
