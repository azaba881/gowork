<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EntrepriseController extends Controller
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
        if (Auth::user()->type == 'entreprise') {
            $entreprises = array();
            $entreprises = DB::table('entreprises')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null) 
                ->get();
            if (count($entreprises) == 0) {
                return view('entreprise.profile-create');
            } else {
                return view('entreprise/index');
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
       /* if (Auth::user()->type == 'entreprise') {
            $entreprises = array();
            $entreprises = DB::table('entreprises')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($entreprises) == 0) {
                $entreprise = new Entreprise();
                $entreprise->user_id = Auth::user()->id;
                $entreprise->logo = $request->input('logo');
                $entreprise->nom = $request->input('nom');
                $entreprise->description = $request->input('description');
                $entreprise->domaine = $request->input('domaine');
                $entreprise->addresse = $request->input('addresse');
                $entreprise->email = $request->input('email');
                $entreprise->site = $request->input('site');
                $entreprise->numero = $request->input('numero');
                $entreprise->linkedyn = $request->input('linkedyn');
                $entreprise->save();
                return redirect('/entreprise');
            } else {
                return redirect('/entreprise');
            }

        } else {
            return view('404');
        }*/
        if (Auth::user()->type == 'entreprise') {
            $entreprises = array();
            $entreprises = DB::table('entreprises')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();

            if (count($entreprises) == 0) {
                $request->validate([   
                            
                    'logo' => 'required',         
                    'nom' => 'required|string',
                    'description' => 'required|string',
                    'domaine' => 'required|string', 
                    'addresse' => 'required|string',
                    'email' => 'required|string',
                    'site' => 'url|required',
                    'numero' => 'required|numeric',
                    'linkedyn' => 'required|url',               
                    ]); 

                    $logo = $request->file('logo');  
                    $logoName = time().'.'.$logo->getClientOriginalExtension();
                    $logo->move(public_path('logo/upload/posted'), $logoName);
                    $actualPath = 'logo/upload/posted/'.$logoName;
                    $entreprise = new Entreprise();
                    $entreprise->user_id = Auth::user()->id;
                    $entreprise->logo = $actualPath;
                    $entreprise->nom = request('nom');
                    $entreprise->description = request('description');
                    $entreprise->domaine = request('domaine');
                    $entreprise->addresse = request('addresse');
                    $entreprise->email = request('email');
                    $entreprise->site = request('site');
                    $entreprise->numero = request('numero');
                    $entreprise->linkedyn = request('linkedyn');
                    $entreprise->save();
                    
                return redirect('/entreprise');
            } else {
                return redirect('/entreprise');
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
   

    public function demandeur() 
    {    
       $demandeur = User::all()->where('type','utilisateur');
       return view('entreprise/demandeur',compact('demandeur',$demandeur)); 
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
