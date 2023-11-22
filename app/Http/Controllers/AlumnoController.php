<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Cetpro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view("admin.alumnos.index", compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cetpros = Cetpro::all();
        return view('admin.alumnos.create', compact('cetpros'));
    }

    public function pdf(Alumno $alumno){
        dd($alumno);
        $pdf = Pdf::loadView('admin.alumnos.pdf', compact('alumno'))->setPaper('a4', 'landscape');
        return $pdf->stream();
        // $alumnos = Alumno::all();
        // $pdf = Pdf::loadView('admin.alumnos.pdf', compact('alumnos'))->setPaper('a4', 'landscape');
        // return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ape_pater' => 'required',
            'ape_mater' => 'required',
            'full_name' => 'required',
            'sexo'=> 'required',
            'f_nacimiento'=> 'required',
            'DNI'=> 'required',
            'correo' => 'required',
            'facebook'=> 'required',
            'tel_fijo'=> 'required',
            'cel_propio'=> 'required',
            'pais'=> 'required',
            'lu_nacimi'=> 'required',
            'ditri_nacimi'=> 'required',
            'provi_nacimi'=> 'required',
            'regi_nacimi'=> 'required',
            'direc_actual'=> 'required',
            'refe_direc'=> 'required',
            'aa_nn_emer'=> 'required',
            'parent_emer'=> 'required',
            'cel_emer'=> 'required',
            'puesto_work'=> 'required',
            'nro_carga_fam'=> 'required',
            'net_en_casa'=> 'required',
            'operador_cel'=> 'required',
            'equipo_tec'=> 'required',
            'discapacidad'=> 'required',
            'lengua_mater'=> 'required',
            'expects'=> 'required',
            'anio_academi'=> 'required',
            'code_inscrip'=> 'required',
            'prog_estudio'=> 'required',

            'cetpro_id' => 'required',
        ]);

        $alumno = Alumno::create($request->all());

        return redirect()->route('admin.alumnos.edit', $alumno)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $pdf = Pdf::loadView('admin.alumnos.pdf', compact('alumno'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $cetpros = Cetpro::all();
        return view('admin.alumnos.edit', compact('alumno','cetpros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'ape_pater' => 'required',
            'ape_mater' => 'required',
            'full_name' => 'required',
            'sexo'=> 'required',
            'f_nacimiento'=> 'required',
            'DNI'=> 'required',
            'correo' => 'required',
            'facebook'=> 'required',
            'tel_fijo'=> 'required',
            'cel_propio'=> 'required',
            'pais'=> 'required',
            'lu_nacimi'=> 'required',
            'ditri_nacimi'=> 'required',
            'provi_nacimi'=> 'required',
            'regi_nacimi'=> 'required',
            'direc_actual'=> 'required',
            'refe_direc'=> 'required',
            'aa_nn_emer'=> 'required',
            'parent_emer'=> 'required',
            'cel_emer'=> 'required',
            'puesto_work'=> 'required',
            'nro_carga_fam'=> 'required',
            'net_en_casa'=> 'required',
            'operador_cel'=> 'required',
            'equipo_tec'=> 'required',
            'discapacidad'=> 'required',
            'lengua_mater'=> 'required',
            'expects'=> 'required',
            'anio_academi'=> 'required',
            'code_inscrip'=> 'required',
            'prog_estudio'=> 'required',

            'cetpro_id' => 'required',
        ]);

        $alumno->update($request->all());

        return redirect()->route('admin.alumnos.edit', $alumno)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('admin.alumnos.index', $alumno)->with('info', 'El registro se eliminó con éxito');
    }
}
