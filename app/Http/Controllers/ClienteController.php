<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index(){

        $clientes=Cliente::all();

        return response()->json($clientes);


    }
    
    public function salida(Request $request){
       //si se le pone el  return Cliente::create($request->all()); muestra los datos escritos
        $clientes = Cliente::create($request->all());
        return response()->json($clientes);
        
    }



    public function show ($id){

     $clientes=Cliente::find($id);
     return response()->json($clientes);
    
    }

    
     public function update(Request $request, Cliente $clientes)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $clientes->update($request->all());

        return response()->json($clientes);
    }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Cliente $clientes)
    {
        $clientes->delete();
        return response()->json($clientes);
    }
}
