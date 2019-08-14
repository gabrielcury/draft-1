<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Resources\CategoriaCollection;
use App\Http\Resources\CategoriaResource;
 
class CategoriaAPIController extends Controller
{
    public function index()
    {
        return new CategoriaCollection(Categoria::paginate());
    }
 
    public function show(Categoria $categoria)
    {
        return new CategoriaResource($categoria->___LOAD_RELATIONSHIPS___);
    }

    public function store(Request $request)
    {
        return new CategoriaResource(Categoria::create($request->all()));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());

        return new CategoriaResource($categoria);
    }

    public function destroy(Request $request, Categoria $categoria)
    {
        $categoria->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}