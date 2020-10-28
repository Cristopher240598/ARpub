<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
   protected $table = 'usuarios';
   protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','fechaNacimiento','usuario','contraseña','email'];
}
