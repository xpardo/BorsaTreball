<?php

namespace App\Http\Controllers;
use App\Models\Presentacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\Oferta;


class PresentacioController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $pres = Presentacio::where('user_id', $id);

        return view('pre.index',[
            "pres" => $pres,
        ]);
       
    }

    public function create(Request $request)
    {
        return view('pre.index');
    }
    
    public function store(Request $request)
    {
        $request->validate([
    
            'pdf' => 'required|mimes:pdf'
        ]);


        if($request->hasFile('pdf')){

            $pres = new  Presentacio;
            
            $pres->name = $request->name;
            $pres->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/pre/',$archivo->getClientOriginalName());
           
            $pres -> filepath = $archivo ->getClientOriginalName();
            $pres -> save();

            return redirect('pre.index')
                    ->with('success','pre has uploaded to the database.')
                    ->with('pre', 'cursiculum Agregada!')
                    ->with('pdf', $pres);
                
           
        }

      
     }



        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presentacio  $presentacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentacio $presentacio)
    {
       
        $presentacio->delete();
    
        return redirect('pre.index')
        ->with('success','categori delete successfully');
    }


     

}
