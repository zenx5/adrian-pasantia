<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $fillable = ['email', 'habilidades', 'intereses', 'aptitudes', 'idiomas', 'descripcion', 
    'telefono', 'ubicacion', 'linkedin', 'experiencia1', 'experiencia2', 'experiencia3', 'universidad', 'secundaria' ];
}
