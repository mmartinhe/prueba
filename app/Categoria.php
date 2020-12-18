<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'categoria_id'
    ];
    public function getNoticias()
    {
        return $this->hasMany(Noticia::class,'categoria_id');
    }
}
