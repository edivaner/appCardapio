<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemPedido;
use App\Cliente;

class Pedido extends Model
{
    //

    protected $fillable = ['id', 'cliente_id', 'user_id', 'created_at', 'updated_at', 'deleted_at'];

    public function itemPedidos()
    {
        return $this->hasMany(ItemPedido::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
