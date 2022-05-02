<?php

namespace App\Http\Controllers;
use App\Models\Doctorat; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class DoctoratController extends Controller
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
        $doctorat = $request->file('fichier');  
        $doctoratName = time().'.'.$doctorat->getClientOriginalExtension();
        $doctorat->move(public_path('document/doctorat/upload/posted'), $doctoratName);
        $actualPath = '/document/doctorat/upload/posted/'.$doctoratName;

        $doctorat = new Doctorat();
        $doctorat->user_id = Auth::user()->id;
        $doctorat->fichier = $actualPath;        
        $doctorat->save();                    
        return redirect('/doctorat');
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
