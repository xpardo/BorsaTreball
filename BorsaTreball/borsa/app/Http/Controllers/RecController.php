<?php

namespace App\Http\Controllers;
use App\Models\Recomanacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD
use Illuminate\Routing\Redirector;
=======
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Oferta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


<<<<<<< HEAD
=======





>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
class RecController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $recs = Recomanacio::where('user_id', $id);

        return view('rec.index',[
            "recs" => $recs,
        ]);
<<<<<<< HEAD

        
=======
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
       
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

<<<<<<< HEAD
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
=======
            $rec = new  Recomanacio;
            
            $rec->name = $request->name;
            $rec->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/rec/',$archivo->getClientOriginalName());
           
            $rec -> filepath = $archivo ->getClientOriginalName();
            $rec -> save();

            return back()
                    ->with('success','rec has uploaded to the database.')
                    ->with('rec', 'recomendacio Agregada!')
                    ->with('pdf', $rec);
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
                
           
        }

<<<<<<< HEAD
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


=======
        return redirect('rec.index');
     }

    }


>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

