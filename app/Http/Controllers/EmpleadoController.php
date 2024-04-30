<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function inicio(){
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }

    public function crear(){
        return view('agregarEmpleado');
    }

    public function guardar(Request $request){
        $nvoEmpleado= new Empleado();
        $nvoEmpleado->nombre = $request->input('nombre');
        $nvoEmpleado->apellido = $request->input('apellido');
        $nvoEmpleado->fechaIngreso = $request->input('fechaIngreso');
        $nvoEmpleado->salario = $request->input('salario');
        $nvoEmpleado->save();

        $nvoEmpleado = Empleado::all();
        return redirect('/empleados');
    }
}
