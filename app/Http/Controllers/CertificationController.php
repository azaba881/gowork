<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Certification; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 


class CertificationController extends Controller
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
        $certification = $request->file('fichier');  
        $certificationName = time().'.'.$certification->getClientOriginalExtension();
        $certification->move(public_path('document/certification/upload/posted'), $certificationName);
        $actualPath = '/document/certification/upload/posted/'.$certificationName;

        $certification = new Certification();
        $certification->user_id = Auth::user()->id;
        $certification->fichier = $actualPath;        
        $certification->save();                    
        return redirect('/certifications');
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
