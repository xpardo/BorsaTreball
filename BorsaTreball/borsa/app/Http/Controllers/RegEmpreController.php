<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Rules\Uppercase;

 



class RegEmpreController extends Controller
{

    public function form(){
        return view('registreEmpre');
     }

     public function perfilEmpre(Request $request){
       
        $validated = $request->validate([
            'username' => 'required',
            'cognom' => 'required',
            'email' =>  'required|email',
            'password1' => 'required|min 8|regex: /^[\d]+1$/',
            'password2' => 'required|same:password1',
            'empre' => 'required',
            'telefon' => 'required',
            'identifi' => 'required',
            'poblacio' => 'required',

        ]); return view('perfilEmpre', $validated);

     }
 


   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
