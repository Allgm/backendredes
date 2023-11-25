<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inscripciones;

class inscripcionesController extends Controller
{
    //Metodo get
    public function get(){
        try{
            $tareas = inscripciones::all();
            return response()->json($tareas, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    //Metodo getby
    public function getById($id){
        try {
            $data = inscripciones::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Metodo guardar
    public function create(Request $request){
        try {
            if($request['inscriptiontype'] == 1)
            {
                $data['inscriptiontype'] = 'PERMANENTE';
            }
            else if($request['inscriptiontype'] == 2)
            {
                $data['inscriptiontype'] = 'OYENTE';
            }
            $data['name'] = $request['name'];
            $data['phone_number'] = $request['phone_number'];
            $res = inscripciones::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Metodo para actualizar
       //Metodo Update
       public function update(Request $request,$id){
        try {
            if($request['inscriptiontype'] == 1)
            {
                $data['inscriptiontype'] = 'PERMANENTE';
            }
            else if($request['inscriptiontype'] == 2)
            {
                $data['inscriptiontype'] = 'OYENTE';
            }
            $data['name'] = $request['name'];
            $data['phone_number'] = $request['phone_number'];
            inscripciones::find($id)->update($data);
            $res = inscripciones::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Metodo para eliminar
    public function delete($id){
        try {
            $res = inscripciones::find($id)->delete();
            return response()->json($res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}
