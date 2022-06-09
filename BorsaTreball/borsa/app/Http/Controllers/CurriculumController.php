<?php

namespace App\Http\Controllers;
use App\Models\Curriculum;
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
class CurriculumController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
<<<<<<< HEAD
        $curris = Curriculum::where('user_id', $id);
=======
        $curri = Curriculum::where('user_id', $id)->paginate(5);
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

        return view('curri.index',[
            "curris" => $curris,
        ]);
       
    }

    public function create(Request $request)
    {
        return view('curri.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
    
            'pdf' => 'required|mimes:pdf'
        ]);


        if($request->hasFile('pdf')){

<<<<<<< HEAD
            $curris = new Curriculum;
            $curris->name = $request->name;
            $curris->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/curri/',$archivo->getClientOriginalName());
           
            $curris -> filepath = $archivo ->getClientOriginalName();
            $curris -> save();

            return redirect('curri.index')
                    ->with('success','curri has uploaded to the database.')
                    ->with('curri', 'cursiculum Agregada!')
                    ->with('pdf', $curris);
=======
            $curri = new Curriculum;
            $curri->name = $request->name;
            $curri->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/curri/',$archivo->getClientOriginalName());
           
            $curri -> filepath = $archivo ->getClientOriginalName();
            $curri -> save();

            return back()
                    ->with('success','curri has uploaded to the database.')
                    ->with('curri', 'cursiculum Agregada!')
                    ->with('pdf', $curri);
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
                
           
        }

<<<<<<< HEAD
       
=======
        return redirect('curri.index');
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
     }



<<<<<<< HEAD
      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum)
    {
        $curriculum->delete();
    
        return redirect('curri.index')
        ->with('success','categori delete successfully');
    }

  
=======






   

     
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

}
