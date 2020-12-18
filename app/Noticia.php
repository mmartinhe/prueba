<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'texto',
        'categoria_id',
    ];
    function getCategoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

}
