<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //Pasos
    //1. Importar modelos en linea 5

    //Metodo guardar
    public function store(Request $request){
        //Instanciacion del modelo
        $Post1 = new Post();
        $Post1->title = $request->title;
        $Post1->description = $request->description;
        $Post1->completed = $request->completed;
        $Post1->save();
    }

    //Metodo para actualizar
    public function update(Request $request, $id){
        $Post1 = Post::findorFail($request->id);
        $Post1->title = $request->title;
        $Post1->description = $request->description;
        $Post1->completed = $request->completed;
        $Post1->save();
    }

    //Metodo para eliminar
    public function destroy(Request $request, $id){
        //Buscando objeto a eliminar
        $Post1 = Post::findorFail($request->id);
        $Post1->delete();
    }

    //Metodo para mostrar
    public function show(Request $request){
        //Buscar 1 registro
        $Post1 = Post::findorFail($request->id);
        if($Post1){
            return ['Post1' => $Post1];
        }
        return ['No se encontraron datos'];
    }
}
