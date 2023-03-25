<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;

class Cliente extends Model
{
    //

    protected $fillable = ['id', 'nome', 'telefone', 'mesa', 'created_at', 'updated_at', 'deleted_at'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
