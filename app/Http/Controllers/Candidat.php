<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Candidat extends Controller
{
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
        $request->validate([
            
            'naissance' => 'required|string',
            'phone' => 'required|numeric',
            'numpiece' => 'required|numeric',
            'photopiece' => 'required',
            'numcarte' => 'required|numeric',            
            'nomcarte' => 'required|string',             
            'adresse' => 'required|string',           
            'photocarte' => 'required',                  
            ]); 
            
            
            $image = $request->file('photopiece'); 
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/upload/posted'), $imageName);
            $actualPath = 'image/upload/posted/'.$imageName;


            $imagea = $request->file('photocarte'); 
            $imageNamea = time().'.'.$imagea->getClientOriginalExtension();
            $imagea->move(public_path('image/upload/post'), $imageNamea);
            $actualPatha = 'image/upload/post/'.$imageNamea;
                
           Identite::create([ 
                'naissance'=>request('naissance'),
                'phone'=>request('phone'),
                'numpiece'=>request('numpiece'),               
                'photopiece'=>$actualPath ,
                'numcarte' => request('numcarte'),            
                'nomcarte' => request('nomcarte'),              
                'adresse' => request('adresse'),            
                'photocarte' => $actualPatha,
                'nom' => Auth()->user()->name,
            ]);
        return redirect()->route('identite.index')
                        ->with('success',"Merci d'avoir  lancé le 
                        processus de confirmation de votre identité.
                        veuillez patienter");
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
