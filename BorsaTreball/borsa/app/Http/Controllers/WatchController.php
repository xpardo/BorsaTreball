<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Oferta;
use App\Models\Candidat;
use App\Models\Alumne;
use Illuminate\Http\Request;

class WatchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view("watch",[
            "ofertas" => Oferta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('candi');
        return redirect('watch');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $candi = new Candidat;
 
        

        $candi->inscriurem = $request->inscriurem;
        $candi->user = auth()->user()->name;


        $oferta = new Oferta();
        $oferta -> id = $request -> id;
        $oferta -> name = $request -> name;
        $candi -> id_ofert = $request -> $oferta;
        $candi -> name = $request -> $oferta;
        $candi->save();


        return back()->with('warch', 'candidatura Agregada!');

        $candi = Candidat::create($request->all());

        return redirect('watch');
      
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $ofertas, $id)
    {

        return view('watch', [
            'ofertas' => Oferta::findOrFail($id)
        ]);
     
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $ofertas)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
