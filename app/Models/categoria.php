<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $timestamps = false; // Evita que arroge las fechas de creacion y actualizacion

    protected $fillable = ['id' , 'cat_nom' , 'cat_obs']; // Solo arroja los campos que se necesiten
}
