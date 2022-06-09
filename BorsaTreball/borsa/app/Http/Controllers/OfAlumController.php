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
use Illuminate\Http\Request;

class OfAlumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
   
<<<<<<< HEAD
        /* $usuario = auth()->user()->name;
=======
        $usuario = auth()->user()->name;
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
        $candi = Candidat::where('user', $usuario)->paginate(10);

        return view('candidatures.index',[
            "candis" => $candi
        ]);

<<<<<<< HEAD
        */
=======
       
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candi
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
 /*    public function destroy(Candidat $candi)
=======
    public function destroy(Candidat $candi)
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    {
        $candi->delete();
        return redirect()->with('candidatures.index')
            ->with('success', "oferta {$id} sa elminatat correctament.");
    }
<<<<<<< HEAD
 */
=======

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
}
