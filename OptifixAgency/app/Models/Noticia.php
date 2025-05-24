<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';
    protected $primaryKey = 'id';

    protected $fillable = ['titulo', 'resumen', 'fecha', 'contenido', 'categoria', 'estado']; //permite que se pueda crear un nuevo registro

}

