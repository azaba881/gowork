<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Job; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
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
       return view('entreprise/job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->type == 'entreprise') { 
            
                    $affiche = $request->file('affiche');  
                    $afficheName = time().'.'.$affiche->getClientOriginalExtension();
                    $affiche->move(public_path('affiche/upload/posted'), $afficheName);
                    $actualPath = 'affiche/upload/posted/'.$afficheName;

                    $job = new Job();
                    $job->user_id = Auth::user()->id;
                    $job->affiche = $actualPath;
                    $job->title = request('title');
                    $job->nombre = request('nombre');
                    $job->ville = request('ville');
                    $job->type = request('type');
                    $job->experience = request('experience');
                    $job->salaire = request('salaire');
                    $job->categorie = request('categorie');
                    $job->description = request('description');
                    $job->expiration = request('expiration');
                    $job->save();                    
                    return redirect('/hme');
           
        } else {
            return view('404');
        }
    }

    public function jobexpire($id)
    {
        DB::table('jobs')
                    ->where('id', $id)
                    ->update(['statut' => 'expire']);
                    return redirect()->route('entreprise');                    
    }

    public function jobrelance($id)
    {
        DB::table('jobs')
                    ->where('id', $id)
                    ->update(['statut' => 'active']);
                    return redirect()->route('entreprise');                    
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
