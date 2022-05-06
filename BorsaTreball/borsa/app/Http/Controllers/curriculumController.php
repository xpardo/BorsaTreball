<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Curriculumfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class curriculumController extends Controller
{
    public function store(Request $request){

        $max_code = Curriculum::select(
            DB::raw(' (IFNULL(MAX(RIGHT(curri_code,7)),0)) AS number_max')
        )->first();

        $year = date('Y');
        $code = 'DOC'.$year.'-'.str_pad($max_code->number_max +1, 7, "0", STR_PAD_LEFT);

        $curri = Curriculum::create([
            'curri_code' => $code,
            'id_alum' => $curri->id,
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
                Curriculumfile::create([
                    'curri_id' => $curri->id,
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
    public function urlfile($curri_id){
        $file = Curriculumfile::where('curri_id',$curri_id)->where('state',1)->first();
        return response()->json(['response' => [
            'url' => $file->url,
            'name' => $file->name,
            ]
        ], 201);
    }

    public function update(Request $request){
        $id = $request->input('id_alum');
        $id = $request->input('curri_id');
        $code = $request->input('curri_code');
        Curriculum::where('id',$id)->update([
            'title' => $request->input('title'),
            'state' => ($request->input('state')?$request->input('state'):0)
        ]);

        Curriculumfile::where('curri_id',$id)->update(['state'=>0]);

        $file = $request->file('file');
        if($file){
            $filename = $file->getClientOriginalName();
            $foo = \File::extension($filename);
            if($foo == 'pdf'){
                $route_file = $code.DIRECTORY_SEPARATOR.date('Ymdhmi').'.'.$foo;
                Storage::disk('public')->put($route_file,\File::get($file));
                Curriculumfile::create([
                    'curri_id' => $id,
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
        Curriculum::where('id',$id)->delete();
        return response()->json(['response' => [
            'msg' => "s'ha eliminat be",
            ]
        ], 201);
    }
}
