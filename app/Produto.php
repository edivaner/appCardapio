<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['id', 'nome', 'descricao', 'created_at', 'updated_at', 'deleted_at'];
}
