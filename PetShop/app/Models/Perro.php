<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    protected $table = 'perros';
    

    protected $fillable = ['nombre', 'descripcion', 'imagen', 'id_cat'];

    use HasFactory;
    public function categoria (){
        return
        $this->belongsTo(Categoria::class, 'id_cat');
    }
}
