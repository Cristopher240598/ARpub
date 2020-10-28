<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administradores extends Model
{
    protected $table = 'administradores';
    protected $fillable =['usuario','contrasenia'];
}
