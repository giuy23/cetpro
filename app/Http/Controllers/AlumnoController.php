<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Cetpro;
use App\Models\Curso;
use App\Models\Marketing;
use App\Models\Programa;
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
        $programas = Programa::all();
        $marketings = Marketing::all();
        return view('admin.alumnos.create', compact('cetpros', 'programas', 'marketings'));
    }

        public function pdf(Request $request, string $alumno, $pdfType = 'pdf')
    {   // $pdfType = 'pdf'
        //Original
        $alumno2 = Alumno::find($alumno);
        dd($alumno2);
        //$pdf = Pdf::loadView('admin.alumnos.pdf', compact('alumno'))->setPaper('a4', 'landscape');

        //Motrar otro pdf
        $view = ($pdfType == 'pdfx') ? 'admin.alumnos.pdfx' : 'admin.alumnos.pdf';
        $pdf = Pdf::loadView($view, compact('alumno2'))->setPaper('a4', 'landscape');
        
        
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
            'ditri_actual'=> 'required',
            'provi_actual'=> 'required',
            'regi_actual'=> 'required',
            'direc_actual'=> 'required',
            'refe_direc'=> 'required',
            'aa_nn_emer'=> 'required',
            'parent_emer'=> 'required',
            'cel_emer'=> 'required',
            'religion'=> 'required',
            'puesto_work'=> 'required',
            'est_civil'=> 'required',
            'nro_carga_fam'=> 'required',
            'net_en_casa'=> 'required',
            'operador_cel'=> 'required',
            'equipo_tec'=> 'required',
            'discapacidad'=> 'required',
            'lengua_mater'=> 'required',
            'expects'=> 'required',
            'anio_academi'=> 'required',
            'code_inscrip'=> 'required',

            'programa_estudio_id'=> 'required',
            'cetpro_id' => 'required',
            'marketing_id' => 'required'
        ]);

        $alumno = Alumno::create($request->all());

        return redirect()->route('admin.alumnos.index', $alumno)->with('info', 'El registro se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno, $pdfType = 'pdf') // $pdfType = 'pdf'
    {   
        //Original
        $programa = Programa::find($alumno->programa_estudio_id);
        $cetpro = Cetpro::find($alumno->cetpro_id);
        $cursos = $programa->cursos;
        //$pdf = Pdf::loadView('admin.alumnos.pdf', compact('alumno','cetpro', 'programa', 'cursos'))->setPaper('a4', 'landscape');
        
        //Mostrar otro pdf
        $view = ($pdfType == 'pdfx') ? 'admin.alumnos.pdfx' : 'admin.alumnos.pdf';
        $pdf = Pdf::loadView($view, compact('alumno', 'cetpro', 'programa', 'cursos'))->setPaper('a4', 'landscape');

        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $cetpros = Cetpro::all();
        $programas = Programa::all();
        $marketings = Marketing::all();
        return view('admin.alumnos.edit', compact('alumno','cetpros','programas', 'marketings'));
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
            'ditri_actual'=> 'required',
            'provi_actual'=> 'required',
            'regi_actual'=> 'required',
            'direc_actual'=> 'required',
            'refe_direc'=> 'required',
            'aa_nn_emer'=> 'required',
            'parent_emer'=> 'required',
            'cel_emer'=> 'required',
            'religion'=> 'required',
            'puesto_work'=> 'required',
            'est_civil'=> 'required',
            'nro_carga_fam'=> 'required',
            'net_en_casa'=> 'required',
            'operador_cel'=> 'required',
            'equipo_tec'=> 'required',
            'discapacidad'=> 'required',
            'lengua_mater'=> 'required',
            'expects'=> 'required',
            'anio_academi'=> 'required',
            'code_inscrip'=> 'required',


            'programa_estudio_id'=> 'required',
            'cetpro_id' => 'required',
            'marketing_id' => 'required'
        ]);

        $alumno->update($request->all());

        return redirect()->route('admin.alumnos.index', $alumno)->with('info', 'El registro se editó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('admin.alumnos.index', $alumno)->with('info', 'El registro se eliminó con éxito',);
    }
}
