<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Rules\Uppercase;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Empresa;


class RegEmpreController extends Controller
{

    public function form(){
        return view('borsa.registreEmpre');
     }

     public function perfilEmpre(Request $request){
       
        $validated = $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'email' =>  'required|email',
            'password' => 'required|confirmed',
            'empre' => 'required',
            'telefon' => 'required',
            'identifi' => 'required',
            'poblacio' => 'required',

        ]); return view('borsa.perfilEmpre', $validated);

     }
 

    

   
    public function index()
    {
        return view('registreEmpre.create');
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
     $this->validate(request(), [
            'name' => 'required',
            'cognom' => 'required',
            'email' =>  'required|email',
            'password' => 'required|confirmed',
            'empre' => 'required',
            'telefon' => 'required',
            'identifi' => 'required',
            'poblacio' => 'required',
        ]);
        
        $empr = User::create(request(['name', 'cognom','email', 'password','empre','telefon','telefon','identifi','poblacio']));
        
        auth()->login($empr);
        
        return redirect()->to('borsa.borsa'); 
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);

        return view('borsa.editempresa', compact('empresa')); 
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'email' =>  'required|email',
            'empre' => 'required',
            'telefon' => 'required',
            'identifi' => 'required',
            'poblacio' => 'required',
            'logo' => 'required',
        ]);
        Game::whereId($id)->update($validatedData);

        return redirect('borsa.perfilEmpre')->with('success', 'Game Data is successfully updated'); 
    }

   
    public function destroy($id)
    {
        //
    }
}
