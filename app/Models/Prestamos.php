<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;
    //NO necesario pero si recomendado
    // protected $table = 'prestamo';
    // protected $fillable = ['id', 'user_id', 'book_id', 'fecha_prestamo', 'fecha_devolucion'];
}
