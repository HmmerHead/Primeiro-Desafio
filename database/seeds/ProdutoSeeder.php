<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::insert(['sku' => 'ERD-123', 'nome' => 'Carvao', 'valorUnitario' => '10', 'UnidadeVenda' => 'Caixa']);
        Produto::insert(['sku' => 'ERD-124', 'nome' => 'Arroz', 'valorUnitario' => '10', 'UnidadeVenda' => 'Pacote']);
        Produto::insert(['sku' => 'ERD-125', 'nome' => 'Alho', 'valorUnitario' => '10', 'UnidadeVenda' => 'Unitario']);
        Produto::insert(['sku' => 'ERD-126', 'nome' => 'Carne', 'valorUnitario' => '10', 'UnidadeVenda' => 'Caixa']);
        Produto::insert(['sku' => 'ERD-127', 'nome' => 'Farofa', 'valorUnitario' => '10', 'UnidadeVenda' => 'Pacote']);
        Produto::insert(['sku' => 'ERD-128', 'nome' => 'Cerveja', 'valorUnitario' => '10', 'UnidadeVenda' => 'Caixa']);
    }
}
