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
use Illuminate\Http\Request;
use App\Models\Candidat;


class OfEmpreController extends Controller
{

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
        
   
        $usuarioEmail = auth()->user()->email;
        $ofempresas = Oferta::where('user', $usuarioEmail)->paginate(10);

        return view('ofempresa.index',[
            "ofertas" => $ofempresas
        ]);

      

    }

   

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('ofempresa.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
      

        $ofempresa = new Oferta();
        $ofempresa->name = $request->name;
        $ofempresa->cicle = $request->cicle;
        $ofempresa->tipus = $request->tipus;
        $ofempresa->sala = $request->sala;
        $ofempresa->h = $request->h;
        $ofempresa->desc = $request->desc;
        $ofempresa->empre = auth()->user()->empre;
        $ofempresa->user = auth()->user()->email;
        $ofempresa->save();

        $ofempresa = Oferta::create($request->all());

        return view('ofempresa.show', [
            'oferta' => $ofempresa
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $ofempresa
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $ofempresa) //abans abia Oferta oferta
    {
        return view('ofempresa.show', [
            'oferta' => $ofempresa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oferta  $ofempresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $ofempresa)
    {
        return view('ofempresa.edit', [
            'oferta' => $ofempresa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $ofempresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $ofempresa)
    {
        $ofempresa->name = $request->name;
        $ofempresa->cicle = $request->cicle;
        $ofempresa->tipus = $request->tipus;
        $ofempresa->sala = $request->sala;
        $ofempresa->h = $request->h;
        $ofempresa->desc = $request->desc;
        $ofempresa->empre = auth()->user()->empre;
        $ofempresa->user = auth()->user()->email;
        $ofempresa->save();
        return redirect()->route('ofempresa.show',$ofempresa)
        ->with('success','Company Has Been updated successfully');
 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $ofempresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $ofempresa)
    {
        $ofempresa->delete();
        return redirect()->with('ofempresa.index')->with('oferta ','Seleccionada sa eliminat');;
    }


}
