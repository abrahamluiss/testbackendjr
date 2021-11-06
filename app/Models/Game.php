<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'partidas';

    use HasFactory;
    protected $fillable = [
        'idJuego',
        'idJugador',
        'idTicket',
        'idTemporada',
        'idcodigo',
        'JuegoToken',
        'estado',
        'puntos',
        'fechaInicio',
        'fechaFin',
        ];

}
