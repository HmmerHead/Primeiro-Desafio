<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Função que buscará os dados e exibirá uma listagem de produtos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produto::all();
    }

    /**
     * Função para armazenar os dados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());        
        return response()->json($produto, 201);

    }

    /**
     * Função para exibir um produto específico
     *
     * @param  int  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return $produto;
    }

    /**
     * Função para editar os dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json($produto, 200);
    }

    /**
     * Função remover o produto.
     *
     * @param  int  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(null, 204);
    }
}
