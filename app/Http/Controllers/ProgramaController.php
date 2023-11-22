<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programas = Programa::all();
        return view('admin.programas.index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'modulo' => 'required',
            'periodo_clases_inicio' => 'required',
            'periodo_clases_final' => 'required',
            'nivel_formativo' => 'required'
        ]);

        $programa = Programa::create($request->all());

        return redirect()->route('admin.programas.edit', $programa)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programa $programa)
    {
        return view("admin.programas.edit", compact("programa"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programa $programa)
    {
        $request->validate([
            'nombre' => 'required',
            'modulo' => 'required',
            'periodo_clases_inicio' => 'required',
            'periodo_clases_final' => 'required',
            'nivel_formativo' => 'required'
        ]);

        $programa->update($request->all());

        return redirect()->route('admin.programas.edit', $programa)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programa $programa)
    {
        $programa->delete();

        return redirect()->route('admin.programas.index', $programa)->with('info', 'El registro se eliminó con éxito');
    }
}
