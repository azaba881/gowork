<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class BioController extends Controller
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
    public function update(Request $request)
    {
        if (Auth::user()->type == 'utilisateur') {
            $bio = array();
            $bio = DB::table('bios')
                ->where('user_id', Auth::user()->id)
                ->Where('deleted_at', null)
                ->get();
            if (count($bio) == 0) {
                $bio = new Bio();
                $bio->user_id = Auth()->User()->id;
                $bio->comment = request('comment');
                $bio->save();
                return redirect('/profil');
            } else{
                    $bio = new Bio(); 
                    $bio = Bio::find(Auth()->User()->id);
                    $bio->comment = request('comment');
                    $bio->save();
                    return redirect('/profil');
                //redirect('/profil') . $request->input('id');
            }        
        }else{
            return view('404');
        }
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
