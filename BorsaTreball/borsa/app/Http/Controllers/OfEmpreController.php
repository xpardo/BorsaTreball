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
        

         // Validar fitxer
       $validatedData = $request->validate([
            'cicle' => 'required',
            'tipus' => 'required',
            'sala' => 'required',
            'h' => 'required',
            'desc' => 'required',
            'flexT' => 'required',
        ]);
   
        // Obtenir dades del fitxer
        $upload = $request->oferta('cicle','tipus','sala','h' ,'desc','flexT' );
        $fileName = $upload->getClientOriginalName();
        $fileSize = $upload->getSize();
        \Log::debug("Storing oferta '{$fileName}' ($fileSize)...");

        // Pujar fitxer al disc dur
        $uploadName = time() . '_' . $fileName;
        $filePath = $upload->storeAs(
            'cicle' ,
            'tipus' ,
            'sala' ,
            'h' ,
            'desc' ,
            'flexT' ,   // Path
            $uploadName ,   // Filename
            'public'        // Disk
        );
    
        if (\Storage::disk('public')->exists($filePath)) {
            \Log::debug("Local storage OK");
            $fullPath = \Storage::disk('public')->path($filePath);
            \Log::debug("Oferta saved at {$fullPath}");
            // Desar dades a BD
            $oferta = Oferta::create([
                
                'cicle' =>$cicle,
                'tipus' => $tipus ,
                'sala' => $sala,
                'h' => $h,
                'desc' => $desc,
                'flexT' => $flexT,
            ]);
            \Log::debug("DB storage OK");
            // Patró PRG amb missatge d'èxit
            return redirect()->route('borsa.show', $oferta)
                ->with('success', 'Oferta successfully saved');
        } else {
            \Log::debug("Local storage FAILS");
            // Patró PRG amb missatge d'error
            return redirect()->route("borsa.CreateOfert")
                ->with('error', 'ERROR uploading oferta');
        } 

     
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta, $id)
    {
        Oferta::destroy($id);
        return redirect('borsa.MyOferta');
    }
}
