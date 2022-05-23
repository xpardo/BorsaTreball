<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Alumne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Oferta;
use Illuminate\Http\Request;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class SearchController extends Searchable
{
    public function index(Request $request)
    {

        return view('welcome');

       /*  $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

       

        $oferta = Oferta::buscarpor($tipo, $buscar)->paginate(5);
     

        return view("home",compact('oferta'));
 */


    }
    
    public function selectSearch(Request $request){
    
            $oferta = [];

            if($request->has('q'))
                $search = $request->q;
                $oferta =Oferta::select("id", "name")
                        ->where('name', 'LIKE', "%$search%")
                        ->get();
            
            return response()->json($oferta);
    }


    public function buscador(Request $request){
        $oferta    =   Oferta::where("name",'like',$request->texto."%")->take(10)->get();
        return view("ofertas.pagina",compact("ofertas"));        
    } 





}