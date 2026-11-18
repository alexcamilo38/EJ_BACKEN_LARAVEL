<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class ProductoController extends Controller
{
    //
    public function index(){

        $productos=Producto::all();

        return response()->json($productos);


    }
    
    public function salida(Request $request){
       //si se le pone el  return Producto::create($request->all()); muestra los datos escritos
       // $derportistas = Producto::create($request->all());
       // return response()->json($derportistas);

       $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'producto',
                'resource_type' => 'image',
            ]
        );

        $producto = Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Producto creada correctamente',
            'data' => $producto,
        ], 201);
        
    }



    public function show ($id){

     $productos=Producto::find($id);
     return response()->json($productos);
    
    }

    
     public function update(Request $request, Producto $productos)
    {
    //metodo mas sencillo sin nesecidad de poner todo lo que pertenece a esa tabla
        $productos->update($request->all());

        return response()->json($productos);
    }
      //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Producto $productos)
    {
        $productos->delete();
        return response()->json($productos);
    }
}
