<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLudik extends Model
{
    protected $table = 'usuarios';

    use HasFactory;
    protected $fillable = [
        'idDisfraz',
        'Nombre',
        'Apellido',
        'DNI',
        'Celular',
        'Correo',
        'Fecha Nacimiento',
        'Acepto',
        'idProvincia',
        'idDepartamento',
        'fechaRegistro',
        ];

}
