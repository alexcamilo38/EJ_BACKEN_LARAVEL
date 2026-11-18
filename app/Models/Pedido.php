<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) 
    public function cliente(){
        return $this->belongsTo('App\Models\cliente');
    }

     //Relacion muchos a muchos
    public function productos(){
        return $this->belongsToMany('App\Models\producto');
    }

    protected $fillable = [
        'fecha_pedido',
        'estado',
        'total',
        'cliente_id',
    ];


}
