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

class CandiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

<<<<<<< HEAD
        $usuari = auth()->user()->name;
        $candis = Candidat::where('user', $usuari)->paginate(100);
=======
        $usuarioEmail = auth()->user()->email;
        $candis = Candidat::where('user', $usuarioEmail)->paginate(10);
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

        return view('candidatures.index',[
            "candis" => $candis
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
        return view('candidatures.create');

    }

    /**
<<<<<<< HEAD
     * Store a newly crEmpresaeated resource in storage.
=======
     * Store a newly created resource in storage.
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

=======
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    public function store(Request $request)
    {
        $candi = new Candidat();
 
  
<<<<<<< HEAD
        $candi->user_id = auth()->user()->id;
        $candi->user = auth()->user()->name;
        $candi->cognom = auth()->user()->cognom;
=======
        $candi->user = auth()->user()->name;
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
        $candi->email = auth()->user()->email;
        $candi->genere = auth()->user()->genere;
        $candi->telefon = auth()->user()->telefon;
        $candi->neixement = auth()->user()->neixement;
        $candi->estat = auth()->user()->estat;
        $candi->fet = auth()->user()->fet;
        $candi->treballat = auth()->user()->treballat;
<<<<<<< HEAD

        $candi->empre = $request->empre;
        $candi->name = $request->name;
        $candi->h = $request->h;
        $candi->sala = $request->sala;
        $candi->desc = $request->desc;
        $candi->cicle = $request->cicle;
        $candi->tipus = $request->tipus;
        
        $candi->id_ofert = $request->oferta_id;

        
        $ok=$candi->save();
        
        if ($ok) {
            return redirect()->route('candi.index')
                ->with('success',"T'has inscrit correctament");
        } else {
            return redirect()->route('ofertas.show', $request->oferta_id)
                ->with('error',"ha agut algun problema");
=======
        $candi->empre = $request->empres;
        $candi->id_ofert = $request->oferta_id;

        
        $candi->save();

        if ($ok) {
            return redirect('candidatures.index')
                ->with("T'has inscrit correctament");
        } else {
            return redirect('ofertas.show', $request->oferta_id)
                ->with("ha agut algun problema");
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show(Candidat $candi)
    {
      

        return view('perfilAlum.show', [
            'oferta' => $candi
        ]);
=======
    public function show(Candidat $candi ,$id_ofert)
    {
        return view('candidatures.show', [
            'candi' => Candidat::findOrFail($id_ofert)
        ]); 
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

     
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

<<<<<<< HEAD
    /**
=======
       /**
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candi
     * @return \Illuminate\Http\Response
<<<<<<< HEAD
    */
    public function destroy(Candidat $candi)
    {
        $candi->delete();
        return redirect('candi')
            ->with('success', "oferta  sa elminatat correctament.");
=======
     */
    public function destroy(Candidat $candi)
    {
        $candi->delete();
        return redirect()->with('candidatures.index')
            ->with('success', "oferta {$id} sa elminatat correctament.");
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    }
}
