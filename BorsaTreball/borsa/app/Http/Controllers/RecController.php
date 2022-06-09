<?php

namespace App\Http\Controllers;
use App\Models\Recomanacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Redirector;
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Oferta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RecController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $recs = Recomanacio::where('user_id', $id);

        return view('rec.index',[
            "recs" => $recs,
        ]);

        
       
    }

    public function create(Request $request)
    {
        return view('rec.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
    
            'pdf' => 'required|mimes:pdf'
        ]);


        if($request->hasFile('pdf')){

            $recs = new  Recomanacio;
            
            $recs->name = $request->name;
            $recs->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/rec/',$archivo->getClientOriginalName());
           
            $recs -> filepath = $archivo ->getClientOriginalName();
            $recs -> save();

            return redirect('rec.index')
                    ->with('success','rec has uploaded to the database.')
                    ->with('recs', 'recomendacio Agregada!')
                    ->with('pdf', $recs);
                
           
        }

     }


        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recomanacio  $pres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recomanacio $recomenacio)
    {
       
    
        $recomenacio->delete();
    
        return redirect('rec.index')
        ->with('success','categori delete successfully');
    }


}



