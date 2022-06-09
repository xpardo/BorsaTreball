<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Empresa;
use App\Models\Oferta;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PerfilEmpreController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        return view("perfilEmpre.index",[
            "empresa" => Empresa::all()
        ]);
    }
    


    public function perfilEmpre(Request $request){
       
        $validated = $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'empre' => 'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'password' => 'required|confirmed',
            'poblacio' => 'required',
        
       
        ]); return view('perfilEmpre', $var);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
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
    public function show(Empresa $empresa)
    {
        //
        return view('perfilEmpre',compact('alumne'));

    }

    
        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Empresa $empresa)
    {

        $user = User::find(Auth::User()->id);
        $empresa = Empresa::find(Auth::User()->id);
        if(empty($user)){
     
            return redirect()->back();
        }
        return view('perfilEmpre.edit')->with('user', $user);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $user = User::find(Auth::User()->id);
        $empresa = Empresa::find(Auth::User()->id);
        if(empty($user)){
          
           return redirect()->back();
        }
        $user->fill($request->all());
        $user->save();
       
        return redirect(route('perfilEmpre.index'));
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
