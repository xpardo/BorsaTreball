<?php

namespace App\Http\Controllers;

use App\Models\Presentacio;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use DB;




class PresentacioController extends Controller
{
    public function insertar(Request $request){
        //dd($request);
        
        try {
            DB::beginTransaction();

            $pre = new Presentacio;
            $pre -> name = $request -> get('name'); 
            
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
}
