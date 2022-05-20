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

        $usuarioEmail = auth()->user()->email;
        $candis = Candidat::where('user', $usuarioEmail)->paginate(10);

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candi = new Candidat();
 
  
        $candi->user = auth()->user()->name;
        $candi->email = auth()->user()->email;
        $candi->genere = auth()->user()->genere;
        $candi->telefon = auth()->user()->telefon;
        $candi->neixement = auth()->user()->neixement;
        $candi->empre = $request->empre;
        $candi->id_ofert = $request->oferta_id;
 
        
        $candi->save();

        if ($ok) {
            return redirect('candidatures.index')
                ->with("T'has inscrit correctament");
        } else {
            return redirect('ofertas.show', $request->oferta_id)
                ->with("ha agut algun problema");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candi ,$id_ofert)
    {
        return view('candidatures.show', [
            'candi' => Candidat::findOrFail($id_ofert)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
