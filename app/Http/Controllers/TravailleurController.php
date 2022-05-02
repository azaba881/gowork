<?php

namespace App\Http\Controllers;
use App\Models\Travailleur;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TravailleurController extends Controller
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
        if (Auth::user()->type == 'utilisateur') {
            $travailleurs = array();
            $travailleurs = DB::table('travailleurs')
                ->where('id', Auth::user()->id)
                ->Where('deleted_at', null) 
                ->get();
            if (count($travailleurs) == 0) {
                return view('candidat.profile-create');
            } else {
                $job = DB::table('jobs')
                ->get();
                $nombre=count($job);
                return view('home',compact(['nombre',$nombre],['job',$job]));
            }
        } else {
            return view('404');
        }
        
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->type == 'utilisateur') {
            $travailleurs = array();
            $travailleurs = DB::table('travailleurs')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($travailleurs) == 0 ) { 
               

                    $photo = $request->file('photo');  
                    $photoName = time().'.'.$photo->getClientOriginalExtension();
                    $photo->move(public_path('photo/upload/posted'), $photoName);
                    $actualPath = 'photo/upload/posted/'.$photoName;
                    
                    $travailleur = new Travailleur();
                    $travailleur->user_id = Auth::user()->id;
                    $travailleur->photo = $actualPath;
                    $travailleur->domaine = request('domaine');
                    $travailleur->addresse = request('addresse');
                    $travailleur->site = request('site');
                    $travailleur->numero = request('numero');
                    $travailleur->linkedyn = request('linkedyn');
                    $travailleur->save();
                    
                return redirect('/home'); 
            } else {
                return redirect('/home'); 
            }

        } else {
            return view('404');
        }

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

    public function cv()
    {
        $travailleur = DB::table('travailleurs') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        $skills = DB::table('skills') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        $etudes = DB::table('etudes') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        $experiences = DB::table('experiences') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        $bios = DB::table('bios') 
                 ->where('user_id', Auth::user()->id) 
                 ->get();
        
        return view('candidat/cv',compact(['travailleur',$travailleur],['etudes',$etudes],
        ['experiences',$experiences],
        ['skills',$skills],['bios',$bios]));
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
