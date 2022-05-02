<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use App\Models\Attestation;
use App\Models\Certification;
use App\Models\License; 
use App\Models\Master; 
use App\Models\Doctorat;   
use App\Models\Bac; 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function document() 
    {
        return view('document/document');  
    }

    public function cv()
    {
        $nombre = 0;
        $cv = DB::table('resumes') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        return view('document/cv',compact(['cv',$cv],['nombre',$nombre]));  
    }

    public function diplome()
    {
        return view('document/diplome');  
    }

    public function attestation()
    {
        $nombre = 0;
        $attestation = DB::table('attestations') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        return view('document/attestation',compact(['attestation',$attestation],['nombre',$nombre]));
    }

    public function certification()
    {
        $nombre = 0;
        $certification = DB::table('certifications') 
                 ->where('user_id', Auth::user()->id)
                 ->get();
        return view('document/certification',compact(['certification',$certification],['nombre',$nombre]));
    }

    public function bac()
    {
        $nombre = 0;
        $bac = DB::table('bacs') 
        ->where('user_id', Auth::user()->id)
        ->get();
        return view('document/bac',compact(['bac',$bac],['nombre',$nombre]));
    }

    public function license()
    {
        $nombre = 0;
        $license = DB::table('licenses') 
        ->where('user_id', Auth::user()->id)
        ->get();
        return view('document/license',compact(['license',$license],['nombre',$nombre]));
    }

    public function master()
    {
        $nombre = 0;
        $master = DB::table('masters') 
        ->where('user_id', Auth::user()->id)
        ->get();
        return view('document/master',compact(['master',$master],['nombre',$nombre]));
    }

    public function doctorat()
    {
        $nombre = 0;
        $doctorat = DB::table('doctorats    ') 
        ->where('user_id', Auth::user()->id)
        ->get();
        return view('document/doctorat',compact(['doctorat',$doctorat],['nombre',$nombre]));
    }

}
