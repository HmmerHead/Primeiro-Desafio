<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estoque;

class EstoqueController extends Controller
{
    /**
     * Função que buscará os dados e exibirá uma listagem de produtos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Estoque::all();
    }

    /**
     * Função para armazenar os dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estoque = Estoque::create($request->all());
        return response()->json($estoque, 201);
    }

    /**
     * Função para exibir um produto específico
     *
     * @param  int  $estoque
     * @return \Illuminate\Http\Response
     */
    public function show(Estoque $estoque)
    {
        return $estoque;
    }

    /**
     * Função para editar os dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $estoque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estoque $estoque)
    {
        $estoque->update($request->all());
        return response()->json($estoque, 200);
    }

    /**
     * Função remover o produto.
     *
     * @param  int  $estoque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        $estoque->delete();
        return response()->json(null, 204);
    }
}
