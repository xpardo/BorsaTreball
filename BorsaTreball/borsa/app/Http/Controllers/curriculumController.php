<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
/* use App\Models\Curriculumfile; */
use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\DB; */
use Illuminate\Support\Facades\Storage;
use DB;


class curriculumController extends Controller
{
    public function insertar(Request $request){
        //dd($request);
        
        try {
            DB::beginTransaction();

            $curri = new Curriculum;
            $curri -> name = $request -> get('name'); 
            
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

        $curri = new Curriculum;

        if($request->hasFile('pdf')){
            $archivo  = $request -> file('pdf'); 
            $archivo -> move(public_path().'/curri/',$archivo->getClientOriginalName());
            $curri -> pdf = $archivo ->getClientOriginalName();
            $curri -> Save();


            return back()
            ->with('success','File has uploaded to the database.')
            ->with('pdf', $curri);
        }
     }

}
