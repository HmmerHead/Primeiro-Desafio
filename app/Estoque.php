<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = ['quant', 'id_prod'];

    /**
    * Relacionamento entre estoque e produto
    */
    
    public function Pedido()
    {
        return $this->hasOne('App\Pedido');
    }
}
