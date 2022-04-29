<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use App\Rules\Uppercase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Alumne;




class RegAlumController extends Controller
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

        return view('borsa.registreAlumne');
     }


    public function registration()
    {
        return view('borsa.registreAlumne');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'neixement' => 'required',
            'genere' => 'required',
            'cp' =>  'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'poblacio' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',  
            'estat' => 'required',
            'fet' => 'required',
            'treballat' => 'required',
        ]);

        
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("borsa")->withSuccess('You have signed-in');
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




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        
        return Alumne::create([
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
            'role_id' => 2
           
          ]);

          return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2
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




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'cognom' => 'required',
            'neixement' => 'required',
            'genere' => 'required',
            'cp' =>  'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'poblacio' => 'required',
            'password' => 'required|confirmed',
            'estat' => 'required',
            'fet' => 'required',
            'treballat' => 'required',
            
        ]);
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2
        ]);

    

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        
       

       
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




 
   

    public function perfilAlum(Request $request){
       
        $validated = $request->validate([
            'name' => 'required',
            'cognom' => 'required',
            'neixement' => 'required',
            'genere' => 'required',
            'cp' =>  'required',
            'email' =>  'required|email',
            'telefon' => 'required',
            'poblacio' => 'required',
            'password' => 'required|confirmed',
            'estat' => 'required',
            'fet' => 'required',
            'treballat' => 'required',
            

           

        ]); return view('borsa.perfilAlum', $validated);

     }
}
