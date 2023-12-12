<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        $modulos = Modulo::all();
        return view('admin.modulos.index', compact('modulos'));
    }

     /*
    */

    public function create()
    {
        $modulos = Modulo::all();
        return view('admin.modulos.create');
    }

     /*
    */
    
    public function store(Request $request)
    {
        $request->validate([
            'nom_modulo' => 'required',
            'fec_inicio' => 'nullable',
            'fec_final' => 'nullable',
        ]);

        $modulo = Modulo::create($request->all());

        return redirect()->route('admin.modulos.index', $modulo)->with('info', 'Se registro con exito');
    }

     /*
    */

    public function show(Modulo $modulo)
    {
        /*$modulo = Modulo::find($id);
        return view('admin.modulos.show', compact('modulo'));*/
    }

    /*
    */

    public function edit(Modulo $modulo)
    {
        return view('admin.modulos.edit', compact('modulo'));
    }

     /*
    */

    public function update(Request $request, Modulo $modulo)
    {
        $request->validate([
            'nom_modulo' => 'required',
            'fec_inicio' => 'nullable',
            'fec_final' => 'nullable',
        ]);

        $modulo->update($request->all());

        return redirect()->route('admin.modulos.index', $modulo)->with('info', 'El registro se actualizo cone exito');
    }

     /*
    */

    public function destroy(Modulo $modulo)
    {
        $modulo->delete();
        return redirect()->route('admin.modulos.index', $modulo)->with('info', 'El registro se eliminó con éxito');
    }
}
