<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedido;

class PedidoController extends Controller
{
    /**
     * Função que buscará os dados e exibirá uma listagem de produtos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pedido::all();
    }

    /**
     * Função para armazenar os dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());
        return response()->json($pedido, 201);
    }

    /**
     * Função para exibir um produto específico
     *
     * @param  int  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return $pedido;
    }

    /**
     * Função para editar os dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        return response()->json($pedido, 200);
    }

    /**
     * Função remover o produto.
     *
     * @param  int  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return response()->json(null, 204);
    }
}
