<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function pedidos(){
        return $this->belongsToMany('App\Models\pedido' ,'producto_pedidos', 'producto_id', 'pedido_id');
    }

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen_url',
        'imagen_public_id',
        
    ];

}
