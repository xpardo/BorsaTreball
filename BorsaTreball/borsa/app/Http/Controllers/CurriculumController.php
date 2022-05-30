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



class CurriculumController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $curri = Curriculum::where('user_id', $id)->paginate(5);

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
                
           
        }

        return redirect('curri.index');
     }









   

     

}
