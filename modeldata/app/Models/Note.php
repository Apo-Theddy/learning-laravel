<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Sobre escribimos el nombre o valor de la tabla
    protected $table = "notes";

    // Campos que se van a poder rellenar
    protected $fillable = [
        "title", "description", "deadline", "done"
    ];

    // Contrario al fillable
    // protected $guarded =[
    //     ""
    // ];

    // Casteo de datos
    protected $casts = [
        "deadline" => "date"
    ];

    /* 
        Ocultar datos cuando serializamos cuando enviamos un json o cuando 
        estamos creando una api al enviar la respuesta en formato json, oculta 
        valores que le pasemos
     */
    protected $hidden = ["password"];
}
