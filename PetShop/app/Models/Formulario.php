<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';
    
    protected $fillable = [
        'nombre', 
        'apellido', 
        'edad',
        'email', 
        'numero',
        'nombre_mascota',
        'texto'];
    use HasFactory;
}
