<?php


namespace App\Http\Controllers;
use App\Models\Recomanacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
   

    public function insertar(Request $request){
        //dd($request);
        
        try {
            DB::beginTransaction();

            $rec = new Recomanacio;
            $rec -> name = $request -> get('name'); 

            $rec->user = auth()->user()->email; 
            
            if($request->hasFile('pdf')){


                $archivo  = $request -> file('pdf'); 
                $archivo -> move(public_path().'/rec/',$archivo->getClientOriginalName());
                $rec -> pdf = $archivo ->getClientOriginalName();
            }
    
            $rec -> Save();



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
            $rec = new Recomanacio;
            $rec->name = $request->name;
            $rec->user = auth()->user()->email;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/rec/',$archivo->getClientOriginalName());
            $rec -> pdf = $archivo ->getClientOriginalName();
            $rec -> Save();
            
            

        }

        return back()
        ->with('success','recomenacio has uploaded to the database.')
        ->with('recomenacio', 'recomenacio Agregada!')
        ->with('pdf', $rec);
        return redirect('recomenacio');
     }
}
