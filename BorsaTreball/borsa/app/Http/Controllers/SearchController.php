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

        $name = $request->get('buscarpor');
        $buscar = $request->get('buscarpor');
        $cicle = $request->get('buscarporcicle');
        $tipus = $request->get('buscarportipus');

       
        $oferta = Oferta::buscarpor($name)->buscarporcicle($cicle, $buscar)->buscarportipus($tipus,$buscar)->paginate(19); 
     

        return view("welcome",compact('oferta'));
    }


}
