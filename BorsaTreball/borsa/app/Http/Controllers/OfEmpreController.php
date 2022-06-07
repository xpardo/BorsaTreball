<?php
namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Presentacio;
use App\Models\Curriculum;
use DB;
use App\Mail\SendMail;

use App\Models\Alumne;
use Illuminate\Support\Facades\Mail;
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
        ])->with("Has creat correctament l'oferta");
        
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
            ->with('success',"sa editat correctament");
 

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
        return redirect('ofempresa')
            ->with('success', "oferta sa elminatat correctament.");
    }


    //.........................
    ///candidatures
    //.........................

    public function candidatures(Oferta $ofempresa) 
    {
        $candis = Candidat::where('id_ofert', $ofempresa->id)->paginate(100);

        return view('ofempresa.candidatures.candidatures',[
            'ofempresa' => $ofempresa,
            "candis" => $candis
        ]);
    }

    //.........................
    ///curriculums 
    //.........................

    public function curriculum(Oferta $ofempresa, Candidat $candidat) 
    {
        $curri = Curriculum::where(["user_id" => $candidat->user_id])->first();
        if ($curri) {
            $pathToFile = public_path() . '/storage/curri/' . $curri->filepath;
            return response()->download($pathToFile);   
        }else{

            return redirect()->route('ofempresa.candidatures', $ofempresa->id)
                ->with('error',"Aquest candidat no té curriculum");
        }
    }

    public function presentacio(Oferta $ofempresa, Candidat $candidat)
    {
        
        $pre = Presentacio::where(["user_id" => $candidat->user_id])->first();
        if ($pre) {
            $pathToFile = public_path() . '/storage/pre/' . $pre->filepath;
            return response()->download($pathToFile);    
        }else{
            return redirect()->route('ofempresa.candidatures', $ofempresa->id)
                ->with('error',"Aquest candidat no té carta de presentació");
          
        }       
    }

    // formulari correu
    public function seleccionar( Candidat $candis , $id){
       

        /*  return view('ofempresa.email',[
             "candis" => $ofempresa
         ]); */
         return view('ofempresa.candidatures.seleccionar', [
             'candis' => Candidat::findOrFail($id)
         ]); 
 
 
     }
 
    // enviar correu
    public function notificar(Request $request, Oferta $ofempresa)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
            ]);
            
        $data = array(
            'name'      =>  $request->input('name'),
            'message'   =>   $request->input('message')
        );

        $email = $request->input('email');

        Mail::to($email)->send(new SendMail($data));

        return back()->with('success', "s'ha enviat exitosament !");
 
    }

   
 

}
