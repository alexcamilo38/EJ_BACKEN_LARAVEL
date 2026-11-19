<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    //

    public function consulta1(){
       $respuesta = Pedido::with(['cliente'])->get();
        return response()->json($respuesta);
    }

    public function consulta2(){
        $respuesta = Producto::where(['stock', '>', 1])->get();

    return response()->json($respuesta);

    }

    public function consulta3(){
        $respuesta = Pedido::with(['productos.pedidos'])->get();

     return response()->json($respuesta);
    }

    public function consulta4(){
        //doesntHave ese es para los no an realizado un pedido
        $respuesta = Cliente::doesntHave('pedido')->get();

     return response()->json($respuesta);

    }

    public function consulta5(){
        
        $respuesta = Pedido::with('productos:id,nombre')->get();

     return response()->json($respuesta);

    }

    public function consulta6(){
        //withCount para contar el pedido
        $respuesta = Cliente::withCount('pedido')->get();

     return response()->json($respuesta);

    }

    public function consulta7(){
        //Con doesntHave('pedidos') filtramos solo los productos sin registros asociados en pedidos.
        $respuesta = Producto::doesntHave('pedidos')->get();

     return response()->json($respuesta);
    }

    public function consulta8(){
        //Listar todos los productos ordenados desde el más caro hasta el más económico
        $respuesta = Producto::orderBy('precio', 'desc')->get();

     return response()->json($respuesta);
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


