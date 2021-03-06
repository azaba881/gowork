<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Candidature; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Storage;

class CandidatureController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        
            $candidature = $request->file('fichier');  
            $candidatureName = time().'.'.$candidature->getClientOriginalExtension();
            $candidature->move(public_path('externe/candidature/upload/posted'), $candidatureName);
            $actualPath = 'externe/candidature/upload/posted/'.$candidatureName;

            $candidature = new Candidature();
            $candidature->user_id = Auth::user()->id;
            $candidature->comment = request('comment');
            $candidature->fichier = $actualPath;
            $candidature->job = $id;
            $candidature->save();

            return redirect('/candidature'); 
                 
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
