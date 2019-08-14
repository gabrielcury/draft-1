<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Http\Resources\ProdutoCollection;
use App\Http\Resources\ProdutoResource;
 
class ProdutoAPIController extends Controller
{
    public function index()
    {
        return new ProdutoCollection(Produto::paginate());
    }
 
    public function show(Produto $produto)
    {
        return new ProdutoResource($produto->___LOAD_RELATIONSHIPS___);
    }

    public function store(Request $request)
    {
        return new ProdutoResource(Produto::create($request->all()));
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());

        return new ProdutoResource($produto);
    }

    public function destroy(Request $request, Produto $produto)
    {
        $produto->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}