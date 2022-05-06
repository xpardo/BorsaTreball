<?php

namespace App\Http\Controllers;

use App\Models\Presentacio;
use App\Models\Presentaciofile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class PresentacioController extends Controller
{
    public function store(Request $request){

        $max_code = Presentacio::select(
            DB::raw(' (IFNULL(MAX(RIGHT(pre_code,7)),0)) AS number_max')
        )->first();

        $year = date('Y');
        $code = 'DOC'.$year.'-'.str_pad($max_code->number_max +1, 7, "0", STR_PAD_LEFT);

        $pre = Presentacio::create([
            'pre_code' => $code,
            'id_alum' => $pre->id,
            'title' => $request->input('title'),
            'state' => ($request->input('state')?$request->input('state'):0)
        ]);

        $file = $request->file('file');

        if($file){
            $filename = $file->getClientOriginalName();
            $foo = \File::extension($filename);
            if($foo == 'pdf'){
                $route_file = $code.DIRECTORY_SEPARATOR.date('Ymdhmi').'.'.$foo;
                Storage::disk('public')->put($route_file,\File::get($file));
                Presentaciofile::create([
                    'pre_id' => $pre->id,
                    'url' => $route_file,
                    'name' => $filename
                ]);
                return response()->json(['response' => [
                        'msg' => 'Registre completat',
                        ]
                    ], 201);
            }else{
                return response()->json(['response' => [
                    'msg' => 'numes arxius PDF',
                    ]
                ], 201);
            }
        }

    }
    public function urlfile($pre_id){
        $file = Presentaciofile::where('pre_id',$pre_id)->where('state',1)->first();
        return response()->json(['response' => [
            'url' => $file->url,
            'name' => $file->name,
            ]
        ], 201);
    }

    public function update(Request $request){
        $id = $request->input('id_alum');
        $id = $request->input('pre_id');
        $code = $request->input('pre_code');
        Presentacio::where('id',$id)->update([
            'title' => $request->input('title'),
            'state' => ($request->input('state')?$request->input('state'):0)
        ]);

        Presentaciofile::where('pre_id',$id)->update(['state'=>0]);

        $file = $request->file('file');
        if($file){
            $filename = $file->getClientOriginalName();
            $foo = \File::extension($filename);
            if($foo == 'pdf'){
                $route_file = $code.DIRECTORY_SEPARATOR.date('Ymdhmi').'.'.$foo;
                Storage::disk('public')->put($route_file,\File::get($file));
                Presentaciofile::create([
                    'pre_id' => $id,
                    'url' => $route_file,
                    'name' => $filename
                ]);
                return response()->json(['response' => [
                        'msg' => "S'ha actualitsat Correctamente",
                        ]
                    ], 201);
            }else{
                return response()->json(['response' => [
                    'msg' => 'numes arxius PDF',
                    ]
                ], 201);
            }
        }

    }

    public function destroy($id){
        Presentacio::where('id',$id)->delete();
        return response()->json(['response' => [
            'msg' => "s'ha eliminat be",
            ]
        ], 201);
    }
}
