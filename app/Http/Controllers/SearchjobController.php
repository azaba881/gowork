<?php

namespace App\Http\Controllers;
use App\Models\Travailleur;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SearchjobController extends Controller
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
        $job = array();
        $domaine = $request->input('domaine');
        $motcle = $request->input('motcle');
        $type = $request->input('type');
        $ville = $request->input('ville');

            
            $job = DB::table('jobs')
            ->Where('deleted_at', null)
            ->Where('statut', 'active')
            ->Where('categorie', 'like', '%' . $domaine .'%')
            ->Where('type', 'like', '%' . $type . '%')
            ->Where('title', 'like', '%' . $motcle . '%')
            ->Where('description', 'like', '%' . $motcle . '%')
            ->Where('ville', 'like', '%' . $ville . '%')
            ->orderBy('updated_at', 'desc')
            ->paginate(8);
            $nombre=count($job);
            $search=1;
        return view('home',compact(['job',$job],['nombre',$nombre],'search',$search));
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
