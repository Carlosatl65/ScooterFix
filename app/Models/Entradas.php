<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;
    public $timestamps=false; //hacer que larabel no haga auditoría en las tablas
    protected $table="entradas"; //nombre de la base de datos entre comillas
    protected $primaryKey = "id_entradas";

    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class, 'id_proveedor');
    }
}
