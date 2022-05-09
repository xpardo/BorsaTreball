<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use DB;

class LlistaCurriController extends Controller
{
    //
    public function index(){
        $query = DB::table('curriculums')->get();
        return view('borsa.curriculums',['datos' => $query]);
    }
}
