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
use App\Models\Oferta;



class curriculumController extends Controller
{




    public function insertar(Request $request){
      
        
        try {
            DB::beginTransaction();

            $curri = new Curriculum;
            $curri -> name = $request -> get('name');
         
            $curri->user = auth()->user()->email; 
            
            if($request->hasFile('pdf')){
                $archivo  = $request -> file('pdf'); 
                $archivo -> move(public_path().'/curri/',$archivo->getClientOriginalName());
                $curri -> pdf = $archivo ->getClientOriginalName();
            }
    
            $curri -> Save();

            DB::commit();

        } catch ( Exception $e){
            DB::rollback();
        }


       
    } 



    public function store(Request $request){
        $request->validate([
    
            'pdf' => 'required|mimes:pdf'
        ]);


        if($request->hasFile('pdf')){

            $curri = new Curriculum;
            $curri->name = $request->name;
            $curri->user = auth()->user()->email;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/curri/',$archivo->getClientOriginalName());
           
            $curri -> pdf = $archivo ->getClientOriginalName();
            $curri -> Save();

            return back()
                    ->with('success','curriculum has uploaded to the database.')
                    ->with('curriculums', 'cursiculum Agregada!')
                    ->with('pdf', $curri);
                
           
        }

        return redirect('curriculums');
     }









   

     

}
