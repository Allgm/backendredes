<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class librerias extends Model
{
    use HasFactory;

    protected $table = 'libreria';
    protected $fillable = ['nombre', 'descripcion', 'preciopublico', 'preciocosto'];

}