<?php

<<<<<<< HEAD
=======

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
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
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Models\Oferta;


=======
use App\Models\Oferta;





>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
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
<<<<<<< HEAD
        return view('pre.index');
=======
        return view('pre.create');
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    }
    
    public function store(Request $request)
    {
        $request->validate([
    
            'pdf' => 'required|mimes:pdf'
        ]);


        if($request->hasFile('pdf')){

<<<<<<< HEAD
            $pres = new  Presentacio;
            
            $pres->name = $request->name;
            $pres->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/pre/',$archivo->getClientOriginalName());
           
            $pres -> filepath = $archivo ->getClientOriginalName();
            $pres -> save();

            return redirect('pre.index')
                    ->with('success','pre has uploaded to the database.')
                    ->with('pre', 'cursiculum Agregada!')
                    ->with('pdf', $pres);
=======
            $pre = new  Presentacio;
            
            $pre->name = $request->name;
            $pre->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/pre/',$archivo->getClientOriginalName());
           
            $pre -> filepath = $archivo ->getClientOriginalName();
            $pre -> save();

            return back()
                    ->with('success','pre has uploaded to the database.')
                    ->with('pre', 'cursiculum Agregada!')
                    ->with('pdf', $pre);
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
                
           
        }

<<<<<<< HEAD
      
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


=======
        return redirect('pre.index');
     }

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
     

}
