<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Alumne;
use App\Models\Oferta;

use Illuminate\Auth\SessionGuard;
class RegisterAlumController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {

        return view('auth.registreAlumne');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'name' => ['required', 'string', 'max:255'],
            'cognom' => ['required', 'string', 'max:255'],
            'neixement' => ['required', 'string', 'max:255'],
            'genere' => ['required', 'string', 'max:255'],
            'cp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefon' => ['required', 'max:255'],
            'poblacio' => ['required',  'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'estat' => ['required',  'max:255'],
            'fet' => ['required',  'max:255'],
            'treballat' => ['required',  'max:255'],
        ]);

        $alumne = Alumne::create([
            

            'name' => $request->name,
            'cognom' => $request->cognom,
            'neixement' => $request->neixement,
            'genere' => $request->genere,
            'cp' => $request->cp,
            'email' => $request->email,
            'telefon' => $request->telefon,
            'poblacio' => $request->poblacio,
            'password' => Hash::make($request->password),
            'estat' => $request->estat,
            'fet' => $request->fet,
            'treballat' => $request->treballat,
            'role_id' => 2


        ]);    

        $user = User::create([
            

            'name' => $request->name,
            'cognom' => $request->cognom,
            'neixement' => $request->neixement,
            'genere' => $request->genere,
            'cp' => $request->cp,
            'email' => $request->email,
            'telefon' => $request->telefon,
            'poblacio' => $request->poblacio,
            'password' => Hash::make($request->password),
            'estat' => $request->estat,
            'fet' => $request->fet,
            'treballat' => $request->treballat,
            'role_id' => 2


        ]);    
        $user->assignRole('alumne');

       


        event(new Registered($user));

        Auth::login($user);
     

        return redirect(RouteServiceProvider::HOME);
    }

}
