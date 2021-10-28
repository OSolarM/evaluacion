<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public function libros()
    {
        return $this->hasMany(Libro::class, 'foreign_key', 'autor_id');
		
		
    }
}
