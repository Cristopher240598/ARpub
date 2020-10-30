<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{

	protected $table = 'pagos';
 	protected $fillable = ['fecha','operacion','idCliente'];
     public function clintes()
    {
    	return $this->belongsTo->('App/clientes','idCliente','id');
    }
}
