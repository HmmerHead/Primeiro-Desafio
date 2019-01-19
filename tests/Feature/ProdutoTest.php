<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProdutoTest extends TestCase
{
    /**
     * Teste para verificar se todas as informações serão trazidas.
     *
     * 
     */
    public function testIndexAll()
    {
        $response = $this->get('api/produtos');
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
        ])->json('GET', 'api/produtos/3');

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
        ])->json('POST', 'api/produtos', [
            'sku' => 'CBA-323',
            'nome' => 'Pepino',
            'valorUnitario' => '10',
            'UnidadeVenda' => 'Caixa',            
            ]);

        $response
            ->assertStatus(201);
    }

    public function testEdit()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', 'api/produtos/1', [
            'sku' => 'CBA-323',
            'nome' => 'Pepino',
            'valorUnitario' => '10',
            'UnidadeVenda' => 'Caixa',            
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
        ])->json('DELETE', 'api/produtos/1');

        $response
            ->assertStatus(204);
    }
}
