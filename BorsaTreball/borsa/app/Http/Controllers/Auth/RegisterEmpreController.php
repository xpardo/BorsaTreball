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
use App\Models\Oferta;
use App\Models\Empresa;
use Illuminate\Auth\SessionGuard;

class RegisterEmpreController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('auth.registreEmpre');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'empre' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefon' => ['required', 'string', 'max:255'],
            'poblacio' => ['required', 'string', 'max:255'],
        ]);


        $empresa = Empresa::create([
        
            'name' => $request->name,
            'cognom' => $request->cognom,
            'email' => $request->email,
            'empre' => $request->empre,
            'password' => Hash::make($request->password),
            'telefon' => $request->telefon,
            'poblacio' => $request->poblacio,
            'role_id' => 3


        ]);    

        $user = User::create([
            

            'name' => $request->name,
            'cognom' => $request->cognom,
            'email' => $request->email,
            'empre' => $request->empre,
            'password' => Hash::make($request->password),
            'telefon' => $request->telefon,
            'poblacio' => $request->poblacio,
            'role_id' => 3


        ]);    

        event(new Registered($user));

        Auth::login($user);
       

        return redirect(RouteServiceProvider::HOME);
    }

    
}
