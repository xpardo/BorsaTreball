<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Oferta;
use Illuminate\Auth\SessionGuard;
use App\Models\Alumne;

class AlumController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cognom' => ['required', 'string', 'max:255'],
            'neixement' => ['required', 'string', 'max:255'],
            'genere' => ['required', 'string', 'max:255'],
            'cp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefon' => ['required', 'max:255'],
            'poblacio' => ['required',  'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'estat' => ['required',  'max:255'],
            'fet' => ['required',  'max:255'],
            'treballat' => ['required',  'max:255'],
            'captcha' => ['required','captcha'],
        ]);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cognom' => $data['cognom'],
            'neixement' => $data['neixement'],
            'genere' => $data['genere'],
            'cp' => $data['cp'],
            'email' => $data['email'],
            'telefon' => $data['telefon'],
            'poblacio' => $data['poblacio'],
            'password' => Hash::make($data['password']),
            'estat' => $data['estat'],
            'fet' => $data['fet'],
            'treballat' => $data['treballat'],
        ]);
    }
}

