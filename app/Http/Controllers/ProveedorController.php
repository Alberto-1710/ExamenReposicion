<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function inicio(){
        $proveedores = Proveedor::all();
        return view('proveedores', compact('proveedores'));
    }

    public function crear(){
        return view('agregarProveedor');
    }

    public function guardar(Request $request){
        $nvoProveedor = new Proveedor();
        $nvoProveedor->nombre = $request->input('nombre');
        $nvoProveedor->fechaRegistro = $request->input('fechaRegistro');
        $nvoProveedor->telefono = $request->input('telefono');
        $nvoProveedor->correo = $request->input('correo');
        $nvoProveedor->save();

        $nvoProveedor = Proveedor::all();
        return redirect('/proveedores');
    }
}
