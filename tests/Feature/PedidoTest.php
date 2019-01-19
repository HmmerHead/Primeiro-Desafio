<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PedidoTest extends TestCase
{
    /**
     * Teste para verificar se todas as informações serão trazidas.
     *
     */
    public function testIndex()
    {
        $response = $this->get('api/pedidos');
        $response->assertStatus(200);
    }

    /**
     * Teste para verificar se todas uma informação é trazidas.
     *
     */
    public function testIndexOne()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('GET', 'api/pedidos/3');

        $response
            ->assertStatus(200);
    }

     /**
     * Teste para criar um informação.
     *
     */
    public function testCreate()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', 'api/pedidos', [
            'dataHora' => '1970-11-25 18:01:27',
            'totalPedido' => '20',
            'qtdItens' => '10',
            'formaPag' => 'Debito',            
            ]);

        $response
            ->assertStatus(201);
    }

    /**
     * Teste para editat uma informação.
     *
     */
    public function testEdit()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', 'api/pedidos/1', [
            'dataHora' => '1970-11-25 18:01:27',
            'totalPedido' => '20',
            'qtdItens' => '10',
            'formaPag' => 'Debito',             
            ]);

        $response
            ->assertStatus(200);
    }

     /**
     * Teste para Deletar uma informação.
     *
     */
    public function testDelete()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('DELETE', 'api/pedidos/1');

        $response
            ->assertStatus(204);
    }

}
