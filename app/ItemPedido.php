<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class ItemPedido extends Model
{
    //

    protected $fillable = ['id', 'qtde', 'pedido_id', 'produto_id', 'created_at', 'updated_at', 'deleted_at'];

    public function Produto()
    {
        return $this->hasOne(Produto::class);
    }
}
