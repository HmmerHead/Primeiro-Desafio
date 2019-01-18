<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
    * Lista dos campos do produto
    * Obs.: o Campo UnidadeVenda possui opções
    * ('Caixa', 'Unitário', 'Pacote', 'Saco')
    */
    
    protected $fillable = ['sku', 'nome', 'valorUnitario', 'UnidadeVenda', 'created_at', 'updated_at'];

    /**
    * Relacionamento entre pedido e produto
    */

    public function estoque()
    {
        return $this->belongsTo('App\Estoque');
    }

}
