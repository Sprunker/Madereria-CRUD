<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madera extends Model
{
    protected $primarykey = 'id';
    protected $table = 'maderas';
    public $timestamps = false;
    protected $fillable = ['tipo', 'medida', 'grosor', 'cantidad', 'detalles'];
}

// $fillable => Lista Blanca
// $guarded  => Lista Negra