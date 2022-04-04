<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Rules\Uppercase;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




class RegAlumController extends Controller
{


    public function form(){
        return view('borsa.registreAlumne');
     }


     public function perfilAlum(Request $request){
       
        $validated = $request->validate([
            'username' => 'required',
            'cognom' => 'required',
            'date' => 'required',
            'cp' =>  'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'poblacio' => 'required',
            'password' => 'required|confirmed',
            'estas' => 'required',
            'fet' => 'required',
            'treballat' => 'required',
        
           

        ]); return view('borsa.perfilAlum', $validated);

     }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registreAlumne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'username' => 'required',
            'cognom' => 'required',
            'date' => 'required',
            'cp' =>  'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'poblacio' => 'required',
            'password' => 'required|confirmed',
            'estas' => 'required',
            'fet' => 'required',
            'treballat' => 'required',
        ]);
        
        $al = User::create(request(['username', 'cognom','date','cp','email','telefon' ,'poblacio','password','estas','fet','treballat']));
        
        auth()->login($al);
        
        return redirect()->to('borsa.borsa'); 
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
}
