<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //
    public function index(){

        $pedidos=Pedido::all();

        return response()->json($pedidos);


    }
    
    public function salida(Request $request){
       //si se le pone el  return Pedido::create($request->all()); muestra los datos escritos
        $pedidos = Pedido::create($request->all());
        return response()->json($pedidos);
        
    }



    public function show ($id){

     $pedidos=Pedido::find($id);
     return response()->json($pedidos);
    
    }

    
     public function update(Request $request, Pedido $pedidos)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $pedidos->update($request->all());

        return response()->json($pedidos);
    }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Pedido $pedidos)
    {
        $pedidos->delete();
        return response()->json($pedidos);
    }
}
