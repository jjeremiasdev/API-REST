<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    // Forzamos el nombre de la tabla
    protected $table = 'paquete';
    
    // Deshabilitamos los timestamps de Laravel
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'destinatario',
        'fecha_ingreso'
    ];
}