<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
    * Lista dos campos do Pedido
    * Obs.: o Campo formaPag possui opções
    * ('Debito', 'Vista')
    */
    
    protected $fillable = ['dataHora', 'totalPedido', 'qtdItens', 'formaPag'];

    /**
    * Relacionamento entre pedido e estoque
    */

    public function estoque()
    {
        return $this->belongsTo('App\Estoque');
    }

}