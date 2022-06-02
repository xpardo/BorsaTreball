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
use Illuminate\Support\Facades\Route;
use App\Models\Oferta;


class CurriculumController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $curris = Curriculum::where('user_id', $id);

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

            $curris = new Curriculum;
            $curris->name = $request->name;
            $curris->user_id = auth()->user()->id;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/storage/curri/',$archivo->getClientOriginalName());
           
            $curris -> filepath = $archivo ->getClientOriginalName();
            $curris -> save();

            return back()
                    ->with('success','curri has uploaded to the database.')
                    ->with('curri', 'cursiculum Agregada!')
                    ->with('pdf', $curris);
                
           
        }

        return redirect('curriculum.index');
     }



      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculum  $curris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curris)
    {
       


        $id = $curris->id;
        // Eliminar fitxer del disc 
        \Storage::disk('public')->delete($curris->filepath);
        \Log::debug("Local storage OK");
        // Eliminar registre de BD
        $curris->delete();
        \Log::debug("DB storage OK");
        // Patró PRG amb missatge d'èxit
        return redirect()->route("curriculum.index")
            ->with('success', "curris {$id} succesfully deleted.");
    }





   

     

}
