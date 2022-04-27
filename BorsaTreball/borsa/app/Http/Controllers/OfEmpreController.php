<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfEmpreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("borsa.MyOferta", [
            "ofertas" => Oferta::all()
        ]);

       
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('borsa.CreateOfert');
        return redirect('MyOferta');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'nom' => 'required',
            'cicle' => 'required',
            'sala' => 'required',
            'h' => 'required',
            'desc' => 'required',
         
        ]);

        $oferta= new Oferta();
        $checkbox = implode(",", $request->get('tipus','flexT'));
        $oferta->checkbox = $checkbox; 
        $oferta = Oferta::create($validatedData);
   
        return redirect('borsa.MyOferta')->with('success', 'Oferta is successfully saved');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        return view('borsa.show',compact('oferta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        return view('borsa.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            
            'nom' => 'required',
            'cicle' => 'required',
            'sala' => 'required',
            'h' => 'required',
            'desc' => 'required',
        ]);

        
        $oferta->update($request->all());

        return redirect()->route('borsa.MyOferta')
            ->with('success','oferta updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta, $id)
    {
        $oferta->delete();
    
        return redirect()->route('borsa.MyOferta')
        ->with('success','file delete successfully');
    }
}
