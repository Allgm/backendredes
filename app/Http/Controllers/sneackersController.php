<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sneackers;

class sneackersController extends Controller
{
    //Metodo get
    public function get(){
        try{
            $tareas = sneackers::all();
            return response()->json($tareas, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    //Metodo getby
    public function getById($id){
        try {
            $data = sneackers::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Metodo guardar
    public function create(Request $request){
        try {
            $data['name'] = $request['name'];
            $data['size'] = $request['size'];
            $data['price'] = $request['price'];
            $res = sneackers::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Metodo para actualizar
       //Metodo Update
       public function update(Request $request,$id){
        try {
            $data['name'] = $request['name'];
            $data['size'] = $request['size'];
            $data['price'] = $request['price'];
            sneackers::find($id)->update($data);
            $res = sneackers::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    public function sumSize(Request $request,$id){
        try {
            $newsize = sneackers::find($id);
            $datasize = $newsize->size;
            $new = $datasize + 1;
            sneackers::where('id',$id)->update(['size' => $new]);
            $res = sneackers::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    public function resSize(Request $request,$id){
        try {
            $newsize = sneackers::find($id);
            $datasize = $newsize->size;
            $new = $datasize - 1;
            sneackers::where('id',$id)->update(['size' => $new]);
            $res = sneackers::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Metodo para eliminar
    public function delete($id){
        try {
            $res = sneackers::find($id)->delete();
            return response()->json($res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}
