<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use App\Rules\Uppercase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use App\Models\Role;
use App\Models\User;
use App\Models\Empresa;


class RegEmpreController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;



   
    public function index()
    {
        return view('auth.log');
    }


    public function customLog(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
   
        return redirect("/.log")->withSuccess('Log details are not valid');
    }

    
    public function form(){

        return view('borsa.registreEmpre');
     }

     public function registration()
    {
        return view('borsa.registreEmpre');
    }



    public function customRegistrationemp(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'email' =>  'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',  
            'empre' => 'required',
            'telefon' => 'required',
            'poblacio' => 'required',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("/")->withSuccess('You have signed-in');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }


    public function create(array $data)
    {
     

        return Empresa::create([
            'name' => $data['name'],
            'cognom' => $data['cognom'],
            'email' => $data['email'],
            'empre' => $data['empre'],
            'password' => Hash::make($data['password']),
            'telefon' => $data['telefon'],
            'poblacio' => $data['poblacio'],
            'role_id' => 3

        ]);    
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 3
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('/');
        }
   
        return redirect("/")->withSuccess('You are not allowed to access');
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('/');
    }




   
    public function store(Request $request)
    {
     

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 3
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);


       
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
      
        
    }

    public function update(Request $request, $id)
    {

    }

   
    public function destroy($id)
    {
        //

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    public function perfilEmpre(Request $request){
       
        $validated = $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'email' =>  'required|email',
            'password' => 'required|confirmed',
            'empre' => 'required',
            'telefon' => 'required',
            'poblacio' => 'required',

        ]); return view('borsa.perfilEmpre', $validated);

     }
 

    


     use SendsPasswordResetEmails;
}
