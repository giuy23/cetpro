<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Models\Modulo;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    public function index()
    {
        $unidades = Unidad::with('modulo')->get();
        return view('admin.unidades.index', compact('unidades'));
    }

     /*
    */

    public function create()
    {
        $unidades = Unidad::all();
        $modulos = Modulo::all();
        return view('admin.unidades.create', compact('modulos'));
    }

     /*
    */
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required',
            'horas' => 'required',
            'condicion' => 'required',
            'modulo_id' => 'required',
        ]);

        $unidad = new Unidad($request->all());
        $unidad->save();

        return redirect()->route('admin.unidades.index', $unidad)->with('info', 'Se registro con exito');
    }

     /*
    */

    public function show(Unidad $unidad)
    {
        /*$modulo = Modulo::find($id);
        return view('admin.modulos.show', compact('modulo'));*/
    }

    /*
    */

    public function edit(Unidad $unidad)
    {   
        $modulos = Modulo::all();
        return view('admin.unidades.edit', compact('unidad', 'modulos'));  // MODULOS ES SINGULAR, NO PLURAL. VERIFICAR 
    }

     /*
    */

    public function update(Request $request, Unidad $unidad)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required',
            'horas' => 'required',
            'condicion' => 'required',
            'modulo_id' => 'required',
        ]);

        $unidad->update($request->all());

        return redirect()->route('admin.unidades.index', $unidad)->with('info', 'El registro se actualizo con exito');
    }

     /*
    */

    public function destroy(Unidad $unidad)
    {
        $unidad->delete();
        return redirect()->route('admin.unidades.index', $unidad)->with('info', 'El registro se eliminó con éxito');
    }
}
