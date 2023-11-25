<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apps;

class appsController extends Controller
{
    //GET
    public function get(){
        try{
            $data = apps::all();
            return response()->json($data, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    //GETBY
    public function getById($id){
        try {
            $data = apps::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //POST
    public function create(Request $request){
        try {
            $data['name1'] = $request['name1'];
            $data['name2'] = $request['name2'];
            $data['name3'] = $request['name3'];
            $data['name4'] = $request['name4'];
            $data['name5'] = $request['name5'];
            $res = apps::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //PUT
    public function update(Request $request,$id){
        try {
            $data['name1'] = $request['name1'];
            $data['name2'] = $request['name2'];
            $data['name3'] = $request['name3'];
            $data['name4'] = $request['name4'];
            $data['name5'] = $request['name5'];
            apps::find($id)->update($data);
            $res = apps::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //DELETE
    public function delete($id){
        try {
            $res = apps::find($id)->delete();
            return response()->json($res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}