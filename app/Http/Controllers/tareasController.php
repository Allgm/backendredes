<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tareas;

class tareasController extends Controller
{
    //Metodo get
    public function get(){
        try{
            $tareas = Tareas::all();
            return response()->json($tareas, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    //Metodo getby
   public function getById($id){
    try {
        $data = tareas::find($id);
        return response()->json($data, 200);
    } catch (\Throwable $th) {
        return response()->json([ 'error' => $th->getMessage()], 500);
    }
}

    //Metodo guardar
    public function create(Request $request){
        try {
            $data['name'] = $request['name'];
            $data['course'] = $request['course'];
            $data['grade'] = $request['grade'];
            $data['hobby'] = $request['hobby'];
            $data['phone_number'] = $request['phone_number'];
            $res = Tareas::create($data);
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
            $data['course'] = $request['course'];
            $data['grade'] = $request['grade'];
            $data['hobby'] = $request['hobby'];
            $data['phone_number'] = $request['phone_number'];
            Tareas::find($id)->update($data);
            $res = Tareas::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }


    //Metodo para eliminar
    public function delete($id){
        try {
            $res = Tareas::find($id)->delete();
            return response()->json($res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}
