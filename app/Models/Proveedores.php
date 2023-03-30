<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    public $timestamps=false; //hacer que larabel no haga auditoría en las tablas
    protected $table="proveedores"; //nombre de la base de datos entre comillas
}
