<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disenios extends Model
{
    protected $table = 'disenios';
    protected $fillable = ['nombre','descripcion','archivo','idCliente'];
    public function clientes()
    {
    	return $this->belongsTo->('App/clientes','idCliente','id');
    }
}
