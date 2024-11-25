<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Trabajador;



class TareaController extends Controller
{
    public function index(){
        $tareas = Tarea::all();
        return view("tareas.index", compact("tareas"));
    }
    public function create(){
        $trabajadores = Trabajador::all();
        return view("tareas.create",compact("trabajadores"));
    }

    public function update($id){
        $tarea = Tarea::find($id);
        $trabajadores = Trabajador::all();
        return view("tareas.update",compact("tarea","trabajadores", "id"));
    }

    public function store(){
        $tarea = new Tarea();
        $tarea->descripcion = request("descripcion");
        $tarea->fecha_limite = request("fecha_limite");
        $tarea->trabajador_id = request("trabajador_id");
        $tarea->save();

        return redirect('/tareas/index');

    }

    public function edit($id){
        $tarea = Tarea::find($id);
        $tarea->deTrabajadorscripcion = request('descripcion');
        $tarea->fecha_limite = request("fecha_limite");
        $tarea->trabajador_id = request("trabajador_id");
        $tarea->update();

        return redirect('/tareas/index');
      
    
    }

    public function delete($id){
        $tarea = Tarea::find($id);
        $tarea -> delete();
        return redirect('/tareas/index');
    }


}