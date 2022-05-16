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
use App\Models\Oferta;




class PresentacioController extends Controller
{
    public function insertar(Request $request){
        //dd($request);
        
        try {
            DB::beginTransaction();

            $pre = new Presentacio;
            $pre -> name = $request -> get('name'); 

            $pre->user = auth()->user()->email;
            
            if($request->hasFile('pdf')){


                $archivo  = $request -> file('pdf'); 
                $archivo -> move(public_path().'/pre/',$archivo->getClientOriginalName());
                $pre -> pdf = $archivo ->getClientOriginalName();
            }
    
            $pre -> Save();



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
            $pre = new Presentacio;
            $pre->name = $request->name;
            $pre->user = auth()->user()->email;
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/pre/',$archivo->getClientOriginalName());
            $pre -> pdf = $archivo ->getClientOriginalName();
            $pre -> Save();
            return back()
            ->with('success','File has uploaded to the database.')
            ->with('presentacio', 'Presentacio Agregada!')
            ->with('pdf', $pre);
            return redirect('presentacio');

           
        }
    
     }



}
