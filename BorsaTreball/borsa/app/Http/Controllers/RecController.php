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
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $recs = Recomanacio::where('user_id', $id);

        return view('rec.index',[
            "recs" => $recs,
        ]);
       
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
                
           
        }

        return redirect('rec.index');
     }

    }



