<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    public function index(){
        $trabajadores = Trabajador::all();
        return view("trabajadores.index",compact('trabajadores'));
    }

    public function create(){
        return view("trabajadores.create");
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:trabajadores',
        ]);

        $trabajadores = new Trabajador();
        $trabajadores->nombre = request('nombre');
        $trabajadores->apellido = request('apellido');
        $trabajadores->dni = request('dni');
        $trabajadores->save();

        return redirect('/trabajador/index');
    }

    public function show($id){
        $trabajador = Trabajador::find($id);
        $tareas = $trabajador->tarea;

        return view('trabajadores.show',compact('tareas','trabajador'));

    }
}
