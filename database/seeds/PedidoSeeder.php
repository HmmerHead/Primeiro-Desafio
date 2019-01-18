<?php

use Illuminate\Database\Seeder;
use App\Pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Pedido::insert(['dataHora' => $faker->dateTime($max = 'now', $timezone = null), 'totalPedido' => '10', 'qtdItens' => '10', 'formaPag' => 'Debito']);
        Pedido::insert(['dataHora' => $faker->dateTime($max = 'now', $timezone = null), 'totalPedido' => '7', 'qtdItens' => '15', 'formaPag' => 'Vista']);
        Pedido::insert(['dataHora' => $faker->dateTime($max = 'now', $timezone = null), 'totalPedido' => '8', 'qtdItens' => '2', 'formaPag' => 'Debito']);
        Pedido::insert(['dataHora' => $faker->dateTime($max = 'now', $timezone = null), 'totalPedido' => '9', 'qtdItens' => '1', 'formaPag' => 'Vista']);

    }
}