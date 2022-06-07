<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //relacionar marca con producto
    public function productos(){
        return $this->hasMany(Producto::class);
    }

}
