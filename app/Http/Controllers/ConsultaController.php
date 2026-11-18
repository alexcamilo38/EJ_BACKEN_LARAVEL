<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    //

    public function consulta1(){
       $pedidos= Pedido::with('cliente')->get();
        return [
           'pedidos'=>$pedidos 
        ];
    }

    public function consulta2(){
        $productos = Producto::where('stock', '>', 1)->get();

    return [
        'productos' => $productos
    ];
    }

    /* public function consulta1(){
       $pakages= Pakage::with('truker')->get();
        return [
           'pakages'=>$pakages 
        ];
    }

    public function consulta2(){
        $pakages = Pakage::with('user', 'province')->get();
        return[
            'pakages'=>$pakages
        ];
    }

   
    public function consulta3(){
        $truker=Truker::with('truck', 'pakages')->get();
        return[
            'truker '=>$truker
        ];
    } */

}


