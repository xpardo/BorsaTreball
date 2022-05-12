<?php

namespace App\Http\Controllers;
use App\Models\Presentacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Oferta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LlistaPresenController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $usuarioEmail = auth()->user()->email;

        $pre = Presentacio::where('user', $usuarioEmail)->paginate(5);

        return view('borsa.presentacio',[
            "pre" => $pre,

        ]);
        
    }
}
