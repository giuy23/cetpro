<?php

namespace App\Http\Controllers;

use App\Models\Cetpro;
use Illuminate\Http\Request;

class CetproController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cetpros = Cetpro::all();
        return view("admin.cetpros.index", compact("cetpros"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.cetpros.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_cetpro' => 'required',
            'tipo_gestion' => 'required',
            'resol_autoriza' => 'required',
            'lugar'=> 'required',
            'distrito'=> 'required',
            'provincia'=> 'required',
            'departamento' => 'required',
            'correo_inst'=> 'required',
            'code_modular'=> 'required',
            'ugel'=> 'required',
            'resol_programs'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'direccion'=> 'required',
            'pag_web'=> 'required',
            'nivel_formativo'=> 'required',
        ]);

        $cetpro = Cetpro::create($request->all());

        return redirect()->route('admin.cetpros.index', $cetpro)->with('info', 'El registro se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cetpro $cetpro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cetpro $cetpro)
    {
        return view("admin.cetpros.edit", compact("cetpro"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cetpro $cetpro)
    {
        $request->validate([
            'name_cetpro' => 'required',
            'tipo_gestion' => 'required',
            'resol_autoriza' => 'required',
            'lugar'=> 'required',
            'distrito'=> 'required',
            'provincia'=> 'required',
            'departamento' => 'required',
            'correo_inst'=> 'required',
            'code_modular'=> 'required',
            'ugel'=> 'required',
            'resol_programs'=> 'required',
            'telefono'=> 'required',
            'celular'=> 'required',
            'direccion'=> 'required',
            'pag_web'=> 'nullable',
            'nivel_formativo'=> 'required',
        ]);

        $cetpro->update($request->all());

        return redirect()->route('admin.cetpros.index', $cetpro)->with('info', 'El registro se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cetpro $cetpro)
    {
        $cetpro->delete();

        return redirect()->route('admin.cetpros.index', $cetpro)->with('info', 'El registro se eliminó con éxito');
    }
}
