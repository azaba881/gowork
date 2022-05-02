<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Attestation; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class AttestationController extends Controller
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
        $attestation = $request->file('fichier');  
        $attestationName = time().'.'.$attestation->getClientOriginalExtension();
        $attestation->move(public_path('document/attestation/upload/posted'), $attestationName);
        $actualPath = '/document/attestation/upload/posted/'.$attestationName;

        $attestation = new Attestation();
        $attestation->user_id = Auth::user()->id;
        $attestation->fichier = $actualPath;        
        $attestation->save();                    
        return redirect('/attestations');
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
