<?php

use Illuminate\Http\Request;
use App\Produto;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return print_r("OLA");
});

/**
 * Grupo de rotas referentes a Produto
 */

Route::get('produtos', 'ProdutoController@index');
Route::get('produtos/{produto}', 'ProdutoController@show');
Route::post('produtos', 'ProdutoController@store');
Route::put('produtos/{produto}', 'ProdutoController@update');
Route::delete('produtos/{produto}', 'ProdutoController@destroy');

/**
 * Grupo de rotas referentes a Pedido
 */

Route::get('pedidos', 'PedidoController@index');
Route::get('pedidos/{pedido}', 'PedidoController@show');
Route::post('pedidos', 'PedidoController@store');
Route::put('pedidos/{pedido}', 'PedidoController@update');
Route::delete('pedidos/{pedido}', 'PedidoController@destroy');

/**
 * Grupo de rotas referentes a Estoque
 */

Route::get('estoques', 'EstoqueController@index');
Route::get('estoques/{estoque}', 'EstoqueController@show');
Route::post('estoques', 'EstoqueController@store');
Route::put('estoques/{estoque}', 'EstoqueController@update');
Route::delete('estoques/{estoque}', 'EstoqueController@destroy');

