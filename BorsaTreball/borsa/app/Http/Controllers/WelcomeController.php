<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Alumne;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Oferta;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
class WelcomeController extends Controller
{

  
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //.............................................
        //Busqueda
        //.............................................

<<<<<<< HEAD
        $text=trim($request->get('text'));
        $oferta=DB::table('ofertas') 
        
            -> select('id', 'name', 'cicle', 'sala', 'h', 'desc', 'tipus', 'user', 'empre')
            ->where('name','LIKE', '%'.$text.'%')
            ->orWhere('cicle','LIKE', '%'.$text.'%')
=======
        $texto=trim($request->get('texto'));
        $oferta=DB::table('ofertas') 
        
            -> select('id', 'name', 'cicle', 'sala', 'h', 'desc', 'tipus', 'user', 'empre')
            ->where('name','LIKE', '%'.$texto.'%')
            ->orWhere('cicle','LIKE', '%'.$texto.'%')
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
            ->paginate(10);
        //.............................................
        
        return view("welcome",[
            "ofertas" => Oferta::all(),
<<<<<<< HEAD
            "text"
=======
            "texto"
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
        ] );

    

        

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



    public function search(Request $request)
    {
        $oferta = Oferta::where('name', 'LIKE', '%'.$request->search.'%')->get();
        return \response()->json($oferta);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function boot()
    {
        Paginator::useBootstrap();
    }
}
