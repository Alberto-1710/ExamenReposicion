<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function inicio(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function crear(){
        return view('agregarProducto');
    }

    public function guardar(Request $request){
        $nvoProducto = new Producto();
        $nvoProducto->descripcion = $request->input('descripcion');
        $nvoProducto->precio = $request->input('precio');
        $nvoProducto->stock = $request->input('stock');
        $nvoProducto->pagaIsv = $request->input('ISV');
        $nvoProducto->save();

        $productos = Producto::all();
        return redirect('/productos');
    }
}
