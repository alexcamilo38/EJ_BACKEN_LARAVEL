<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    // Relacion Uno a Muchos
    public function pedido(){
        return $this->hasMany('App\Models\pedido');
    }

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono'
        
    ];

    

    
}
