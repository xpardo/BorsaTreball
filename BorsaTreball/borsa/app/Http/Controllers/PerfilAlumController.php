<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Alumne;
use App\Models\Oferta;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Candidat;
=======
use Illuminate\Auth\SessionGuard;
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

class PerfilAlumController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        return view("perfilAlum.index ",[
            "alumne" => Alumne::all()
        ]);
    }


<<<<<<< HEAD
=======
    public function perfilAlumne(){
        return view('perfilAlum');
     }
 
 

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

    public function perfilAlum(Request $request){
       
        $validated = $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'neixement' => 'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'password' => 'required|confirmed',
            'poblacio' => 'required',
            'cp' => 'required',
            'estas' => 'required',
            'fet' => 'required',
            'treballat' => 'required',
           
       
<<<<<<< HEAD
        ]); return view('perfilAlum.index ', $validated);
    }


   /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $perfilAlum
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $perfilAlum)
    {
        //

        return view('perfilAlum.show', [
            'candi' => $perfilAlum
        ]);
=======
        ]); return view('perfilAlum', $validated);
    }


  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumne $alumne)
    {
        //

        return view('perfilAlum',compact('alumne'));
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     

    }

<<<<<<< HEAD
      /**
=======
    /**
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(Request $Alumne)
    {   
       

        
=======
    public function store(Request $request)
    {
        //
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    }
    

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumne  $alumnes
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Alumne $alumne)
    {

        $user = User::find(Auth::User()->id);
        $alumne = Alumne::find(Auth::User()->id);
        if(empty($user)){
     
            return redirect()->back();
        }
        return view('perfilAlum.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumne  $alumnes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $user = User::find(Auth::User()->id);
        $alumne = Alumne::find(Auth::User()->id);
        if(empty($user)){
          
           return redirect()->back();
        }
        $user->fill($request->all());
        $user->save();
       
        return redirect(route('perfilAlum.index'));
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
