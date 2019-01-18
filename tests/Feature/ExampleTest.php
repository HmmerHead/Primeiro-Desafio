<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->post('/produtos', [
            'sku' => 'ABS-123',
            'nome' => 'Alga',
            'valorUnitario' => '10',
            'UnidadeVenda' => 'Caixa',
        ])->seeStatusCode(200);
    }
}
