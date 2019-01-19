<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EstoqueTest extends TestCase
{
    /**
     * Teste para verificar se todas as informações serão trazidas.
     *
     */
    public function testIndex()
    {
        $response = $this->get('api/estoques');
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
        ])->json('GET', 'api/estoques/3');

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
        ])->json('POST', 'api/estoques', [
            'quant' => '3',
            'id_prod' => '1',
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
        ])->json('PUT', 'api/estoques/1', [
            'quant' => '3',
            'id_prod' => '1',           
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
        ])->json('DELETE', 'api/estoques/1');

        $response
            ->assertStatus(204);
    }

}
