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

        $usuari = auth()->user()->name;
        $candis = Candidat::where('user', $usuari)->paginate(100);

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
     * Store a newly crEmpresaeated resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $candi = new Candidat();
 
  
        $candi->user_id = auth()->user()->id;
        $candi->user = auth()->user()->name;
        $candi->cognom = auth()->user()->cognom;
        $candi->email = auth()->user()->email;
        $candi->genere = auth()->user()->genere;
        $candi->telefon = auth()->user()->telefon;
        $candi->neixement = auth()->user()->neixement;
        $candi->estat = auth()->user()->estat;
        $candi->fet = auth()->user()->fet;
        $candi->treballat = auth()->user()->treballat;

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
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candi)
    {
      

        return view('perfilAlum.show', [
            'oferta' => $candi
        ]);

     
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candi
     * @return \Illuminate\Http\Response
    */
    public function destroy(Candidat $candi)
    {
        $candi->delete();
        return redirect('candi')
            ->with('success', "oferta  sa elminatat correctament.");
    }
}
