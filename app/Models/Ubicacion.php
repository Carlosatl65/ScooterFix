<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="ubicacion"; //nombre de la base de datos entre comillas
    protected $primaryKey = 'id_marca';
}
