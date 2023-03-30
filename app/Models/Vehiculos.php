<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    public $timestamps=false; //hacer que larabel no haga auditoría en las tablas
    protected $table="vehiculos"; //nombre de la tabla en la base de datos entre comillas
}
