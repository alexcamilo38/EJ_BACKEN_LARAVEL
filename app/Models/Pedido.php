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
     //se ase el resto para que la llame como se utliza la pivote
    public function productos(){
        return $this->belongsToMany('App\Models\producto','producto_pedidos', 'producto_id', 'pedido_id');
    }

    protected $fillable = [
        'fecha_pedido',
        'estado',
        'total',
        'cliente_id',
    ];


}
