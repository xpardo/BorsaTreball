<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Alumne;
use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;

class PerfilAlumController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("borsa.perfilAlum",[
            "alumne" => Alumne::all()
        ]);
    }


    public function perfilAlumne(){
        return view('perfilAlum');
     }
 
 


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
