<?php

namespace App\Http\Controllers;

use App\Models\Presentacio;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use DB;
class LlistaPresenController extends Controller
{
    //
    public function index(){
        $query = DB::table('presentacions')->get();
        return view('borsa.presentacio',['pre' => $query]);
    }
}
