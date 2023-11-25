<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\librerias;

class libreriasController extends Controller
{
    //GET
    public function get(){
        try{
            $data = librerias::all();
            return response()->json($data, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    //GETBY
    public function getById($id){
        try {
            $data = librerias::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //POST
    public function create(Request $request){
        try {
            $data['nombre'] = $request['nombre'];
            $data['descripcion'] = $request['descripcion'];
            $data['preciopublico'] = $request['preciopublico'];
            $data['preciocosto'] = $request['preciocosto'];
            $res = librerias::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //PUT
    public function update(Request $request,$id){
        try {
            $data['nombre'] = $request['nombre'];
            $data['descripcion'] = $request['descripcion'];
            $data['preciopublico'] = $request['preciopublico'];
            $data['preciocosto'] = $request['preciocosto'];
            librerias::find($id)->update($data);
            $res = librerias::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //DELETE
    public function delete($id){
        try {
            $res = librerias::find($id)->delete();
            return response()->json($res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}