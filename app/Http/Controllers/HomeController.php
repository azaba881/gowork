<?php
use App\Models\Job; 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $job = DB::table('jobs')
        ->get();
        $nombre=count($job);
          
        return view('home',compact(['job',$job],['nombre',$nombre]));
    }

    public function standard($id)
    {        
        DB::table('users')
                    ->where('id', $id)
                    ->update(['abonnement' => 'standard']);        
        return view('abonnement');
    } 

    public function abonnement()
    {
        return view('abonnement');
    }
    public function candidature()
    {
        return view('candidature');
    }

    public function profil()
    {
        $travailleur = DB::table('travailleurs') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        return view('profil',compact('travailleur',$travailleur));
    }
   

    //profil entreprise here

    public function entreprise()
    {
        $job = DB::table('jobs')
                 ->where('user_id', Auth::user()->id)
                 ->get();
        
        $jobcount=count($job);
        return view('entreprise/index',compact(['job',$job],['jobcount',$jobcount]));
    }
    
    public function entrepriseabonnement()
    {
        return view('entreprise/abonnement');
    }
    public function entreprisecandidature()
    {
        return view('entreprise/candidature');
    }

    public function evaluation()
    {
        return view('entreprise/evaluation');
    }

    public function entrepriseprofil()
    {
        $entreprises = array();
        $entreprises = DB::table('entreprises')->where('user_id', Auth::user()->id)->Where('deleted_at', null)->get();
       return view('entreprise/profil',compact('entreprises',$entreprises));
              
    }
}
