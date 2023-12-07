<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\DetalleMatricula;
use Illuminate\Http\Request;

class DetalleMatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.matricula.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos=Alumno::all();
        return view('admin.matricula.create', compact("alumnos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "user_id"=> 'required',
            "programa_id"=> 'required',
            "modulo_id"=> 'required',
            "unidad_id"=> 'required',
            "competencia_id"=> 'required',
            "capacidad_id"=> 'required',
        ]);

        $detalle = DetalleMatricula::create($request->all());

        return redirect()->route('admin.matricula.index', $detalle)->with('info', 'El registro se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $curso)
    {
        return view("admin.cursos.edit", compact("curso"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $curso)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required',
            'horas' => 'required',
            'condicion' => 'required'
        ]);

        $curso->update($request->all());

        return redirect()->route('admin.cursos.index', $curso)->with('info', 'El registro se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($curso)
    {
        $curso->delete();

        return redirect()->route('admin.cursos.index', $curso)->with('info', 'El registro se eliminó con éxito');
    }
}
