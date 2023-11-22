<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('admin.cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required',
            'horas' => 'required',
            'condicion' => 'required'
        ]);

        $curso = Curso::create($request->all());

        return redirect()->route('admin.cursos.edit', $curso)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        return view("admin.cursos.edit", compact("curso"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required',
            'horas' => 'required',
            'condicion' => 'required'
        ]);

        $curso->update($request->all());

        return redirect()->route('admin.cursos.edit', $curso)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('admin.cursos.index', $curso)->with('info', 'El registro se eliminó con éxito');
    }
}
