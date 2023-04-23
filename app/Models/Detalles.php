<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    use HasFactory;
    public $timestamps=false; //hacer que larabel no haga auditoría en las tablas
    protected $table="detalles"; //nombre de la tabla de la base de datos entre comillas
    protected $primaryKey = "id_detalle";

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'id_producto');
    }

}
