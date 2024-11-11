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

    public function store(){
        $trabajadores = new Trabajador();
        $trabajadores->nombre = request('id');
        $trabajadores->nombre = request('nombre');
        $trabajadores->nombre = request('apellido');
        $trabajadores->nombre = request('dni');
        $trabajadores->save();

        return redirect('/trabajador/index');
    }
}
