<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    public $timestamps=false; //hacer que larabel no haga auditoría en las tablas
    protected $table="productos"; //nombre de la base de datos entre comillas
    protected $primaryKey = "id_producto";

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'id_ubicacion');
    }

    public function vehiculos()
    {
        return $this->belongsTo(Vehiculos::class, 'id_vehiculo');
    }

}
