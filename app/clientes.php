<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nombreEmpresa','rfc','nombre','apellidoMaterno','apellidoPaterno','usuario','email','contrasenia','telefono','premium'];
}
