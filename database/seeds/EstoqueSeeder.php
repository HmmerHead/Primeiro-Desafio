<?php

use Illuminate\Database\Seeder;
use App\Estoque;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estoque::insert(['quant' => '20', 'id_prod' => '1']);
        Estoque::insert(['quant' => '30', 'id_prod' => '2']);
        Estoque::insert(['quant' => '50', 'id_prod' => '3']);
        Estoque::insert(['quant' => '34', 'id_prod' => '4']);
        Estoque::insert(['quant' => '43', 'id_prod' => '5']);
    }
}