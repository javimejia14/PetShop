<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    protected $table = 'gatos';
    

    protected $fillable = ['nombre', 'descripcion', 'imagen', 'id_cat'];

    use HasFactory;
    public function categoria (){
        return
        $this->belongsTo(Categoria::class, 'id_cat');
    }
}
