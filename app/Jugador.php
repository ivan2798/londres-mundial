<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadors';  
    protected $fillable = ['nombre','edad','created_at','updated_at'];  

    public function getnombreAttribute($value) 
    { 
        return strtoupper($value);
    } 

    public function setnombreAttribute($value) 
    { 
        $this->attribute['nombre'] = strtolower($value);
    }
}
