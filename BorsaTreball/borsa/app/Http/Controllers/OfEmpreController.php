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
        $ofertas = Oferta::where('user', $usuarioEmail)->paginate(5);

        return view('borsa.MyOferta',[
            "ofertas" => $ofertas
        ]);

       
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('borsa.CreateOfert');
        return redirect('borsa.MyOferta');

      
       
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $oferta = new Oferta();
        $oferta->nom = $request->nom;
        $oferta->cicle = $request->cicle;
        $oferta->sala = $request->sala;
        $oferta->h = $request->h;
        $oferta->desc = $request->desc;
        $oferta->privat = $request->privat;
        $oferta->user = auth()->user()->empre;
        $oferta->user = auth()->user()->email;
        $oferta->save();

        return back()->with('MyOferta', 'Oferta Agregada!');

        $ofertas = Oferta::create($request->all());

        return redirect('MyOferta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $ofertas)
    {
       
        return view('show',compact('ofertas'));
 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        return view('borsa.edit',compact('file'));
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
        $request->validate([
            
            'nom' => 'required',
            'cicle' => 'required',
            'sala' => 'required',
            'h' => 'required',
            'desc' => 'required',
            'privat' => 'privat',
        ]);

        
        $oferta->update($request->all());

        return redirect()->route('borsa.MyOferta')
            ->with('success','oferta updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta, $id)
    {
        $oferta->delete();
    
        return redirect()->route('borsa.MyOferta')
        ->with('success','file delete successfully');
    }


}
