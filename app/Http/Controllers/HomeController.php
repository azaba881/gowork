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
        ->Where('statut', 'active')
        ->get();

        $nombre=count($job);

        $skills = DB::table('skills') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        $etudes = DB::table('etudes') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        $experiences = DB::table('experiences') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
 
        if($nombre > 8){
            $job = DB::table('jobs')
        ->Where('statut', 'active')
        ->paginate(8);
        }        
        return view('home',compact(['job',$job],['nombre',$nombre],['etudes',$etudes],
        ['experiences',$experiences],
        ['skills',$skills],));
    }

    public function standard($id)
    {        
        DB::table('n')
                    ->where('id', $id)
                    ->update(['abonnement' => 'standard']);          
        return redirect('abonnement');
    }
    
    public function base($id)
    {        
        DB::table('users')
                    ->where('id', $id)
                    ->update(['abonnement' => 'base']);        
        return redirect('abonnement');
    }

    public function premium($id)
    {        
        DB::table('users')
                    ->where('id', $id)
                    ->update(['abonnement' => 'premium']);        
        return redirect('abonnement');
    }

    public function abonnement()
    {
        return view('abonnement');
    }

    //candidatures 

    public function candidature() 
    {
        
        $candidatures = DB::table('candidatures') 
                 ->where('candidatures.user_id', Auth::user()->id)
                 ->join('jobs','candidatures.job','=','jobs.id')
                 ->select('candidatures.*','jobs.*')
                 ->get();
        $nombre=1;
        return  view('candidature',compact(['candidatures',$candidatures],['nombre',$nombre]));
    }

    public function candidatureentreprise($id)
    {
        
        $candidatures = DB::table('candidatures') 
                 ->join('users','candidatures.user_id','=','users.id')
                 ->select('candidatures.*','users.*')
                 ->get();

        $candidatures = DB::table('candidatures') 
                 ->join('jobs','candidatures.user_id','=','jobs.id')
                 ->select('candidatures.*','jobs.*')
                 ->get();

        $candidatures = DB::table('candidatures') 
                 ->where('candidatures.user_id', Auth::user()->id)
                 ->join('jobs','candidatures.job','=','jobs.id')
                 ->select('candidatures.*','jobs.*')
                 ->get();
       
        $nombre=1;
        return  view('candidature',compact(['candidatures',$candidatures],['nombre',$nombre]));  
    }
 
    public function profil()
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
        
        return view('profil',compact(['travailleur',$travailleur],
                                     ['etudes',$etudes],
                                     ['experiences',$experiences],
                                     ['skills',$skills],
                                     ['bios',$bios],
                                                                   ));
    }

  
    public function  travailleurexterne()
    {
        $job = DB::table('externes')->get();
        return view('candidat/externes',compact('job',$job));
    }

    //profil entreprise here

    public function entreprise()
    {
        $job = DB::table('jobs')
                 ->where('user_id', Auth::user()->id) 
                 ->get();
        $nombre=1;
        $jobcount=count($job);
        return view('entreprise/index',compact(['job',$job],['jobcount',$jobcount],['nombre',$nombre]));
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
