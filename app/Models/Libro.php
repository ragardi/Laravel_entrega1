<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    // No necesario pero si recomendado
    // protected $table = 'libro';
    // protected $fillable =['id', 'titulo', 'autor', 'año_publicacion', 'genero', 'disponible'];
}

