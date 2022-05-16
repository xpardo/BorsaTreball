<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Recomanacio;
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Oferta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LlistaRecController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $usuarioEmail = auth()->user()->email;

        $rec = Recomanacio::where('user', $usuarioEmail)->paginate(5);

        return view('borsa.recomenacio',[
            "rec" => $rec,

        ]);
        
    }
}
