<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre_cat'];
    use HasFactory;

    public function perro()
    {
        return $this->hasMany(Perro::class, 'id_cat');
    }

    public function gato()
    {
        return $this->hasMany(Gato::class, 'id_cat');
    }
    use HasFactory;
}
