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
        $ofertas = Oferta::where('user', $usuarioEmail)->paginate(10);

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
      

        $ofertas = new Oferta();
        $ofertas->name = $request->name;
        $ofertas->cicle = $request->cicle;
        $ofertas->tipus = $request->tipus;
        $ofertas->sala = $request->sala;
        $ofertas->h = $request->h;
        $ofertas->desc = $request->desc;
        $ofertas->privat = $request->privat;
        $ofertas->empre = auth()->user()->empre;
        $ofertas->user = auth()->user()->email;
        $ofertas->save();

        $ofertas = Oferta::create($request->all());

        return redirect('MyOferta'); 
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $ofertas,$id)
    {



        return view('borsa.showOfert', [
            'ofertas' => Oferta::findOrFail($id)
        ]);
     
 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $ofertas, $id)
    {
       

        return view('borsa.editOfert', [
            'ofertas' => Oferta::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $ofertas ,$id)
    {
  
        $request->validate([
            'name' => 'required',
            'cicle' => 'required',
            'tipus' => 'required',
            'sala' => 'required',
            'h' => 'required',
            'desc' => 'required',
            'privat' => 'privat',
        ]);
        
        $ofertas = Oferta::find($id);
        $ofertas->name = $request->name;
        $ofertas->cicle = $request->cicle;
        $ofertas->tipus = $request->tipus;
        $ofertas->sala = $request->sala;
        $ofertas->h = $request->h;
        $ofertas->desc = $request->desc;
        $ofertas->privat = $request->privat;
        $ofertas->empre = auth()->user()->empre;
        $ofertas->user = auth()->user()->email;
        $ofertas->save();
        return redirect()->route('MyOferta')
        ->with('success','Company Has Been updated successfully');
    }



        

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $ofertas , $id)
    {
        


        $ofertas->delete();
        return redirect()->route('MyOferta')
        ->with('success','Company has been deleted successfully');


 

    }


}
