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
        return view('pre.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
    
            'pdf' => 'required|mimes:pdf'
        ]);


        if($request->hasFile('pdf')){

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
                
           
        }

        return redirect('pre.index');
     }

     

}
