<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulado extends Model{
    use HasFactory;

    protected $fillable = [
        "id",
        "direccion",
        "imagen_perfil",
        "imagen_documento",
        "username",
        "first_name",
        "last_name",
        "email",
        "di_tipo",
        "nacimiento",
        "sexo",
        "genero",
        "telefono",
        "paisRecidencia",
        "di",
        "user",
        "aprobacion"
    ];

    protected $dates = [
        'fecha_incio',
        'fecha_fin',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'id_postulado');
    }
}