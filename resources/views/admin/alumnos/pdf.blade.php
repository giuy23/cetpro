<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nómina de Matrícula</title>

</head>
<style>
    :root {
        --background-table: #f0f0f0;
    }

    /* SECTION */
    .section-tittle {
        margin-top: -50px;
    }

    .section-tittle div {
        float: left;
        margin-right: 100px;
        /* Ajusta el margen según sea necesario */
    }

    .tittle {
        margin-left: -5%;
        font-weight: bold;
    }

    .anio {
        text-align: center;
        margin-top: -3%;
    }

    .logo{
        margin-top: -10%;
        margin-left: -5%;
    }

    /* FIRST TABLE */

    .first-table {
        margin-top: 8%;
        font-size: 1rem;
    }

    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
    }

    .bold-column {
        /* font-weight: 900; */
        font-weight: bold;

    }

    .rows-1 {
        width: 20%;
        background-color: #f0f0f0;
        text-indent: 5px;
    }

    .text-center {
        text-align: center;
    }

    .indent {
        text-indent: 20px;
        text-transform: uppercase;
        font-size: 0.95rem;
    }
    .name-upper{
        text-transform: uppercase;
    }

    /* SECOND TABLE */
    /* .second-tittle{
    font-size: 1.2rem;
} */

    .second-table {
        margin-top: -1%
    }
    .row-main{
        text-transform: uppercase;
        width: 70%
    }

    .shadow{
        background-color: #f0f0f0;
    }
/* THRID TABLE*/

/* SPAN */
    .span-1{
        margin-left: 10%;
    }
    .span-2{
        margin-left: 20%;
    }
    .span-3{
        margin-left: 20%;
    }
    .legend{
        margin-top: 0px;
        margin-left: 79%;
    }

</style>

<body>
    <section class="section-tittle">
        <div class="">
            <figure class="logo">
                <img width="280px" src="{{ public_path('img/min-educacion-logo.jpg') }}">
                {{-- <img width="100px" src="{{ public_path('black/img/bg5.jpg') }}"> --}}
                {{-- <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Profile Photo') }}"> --}}
            </figure>
        </div>
        <div class="tittle">
            <p class="">FICHA DE REGISTRO DE MATRICULA</p>
            <p class="anio">AÑO 2023</p>
        </div>
    </section>

    <table class="first-table">
        <tbody>
            <tr>
                <td class="bold-column rows-1">Nombre del CETPRO: </td>
                <td class="indent ">{{ $cetpro->name_cetpro }}</td>
                <td class="bold-column rows-1">DRE/GRE: </td>
                <td class="indent ">{{ $cetpro->ugel }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Código modular</td>
                <td class="indent ">{{ $cetpro->code_modular }}</td>
                <td class="bold-column rows-1">Tipo de Gestión</td>
                <td class="indent ">{{ $cetpro->tipo_gestion }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Departamento: </td>
                <td class="indent ">{{ $cetpro->departamento }}</td>
                <td class="bold-column rows-1">Provincia: </td>
                <td class="indent ">{{ $cetpro->provincia }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Distrito: </td>
                <td class="indent ">{{ $cetpro->distrito }}</td>
                <td class="bold-column rows-1">Tipo de Gestión</td>
                <td class="indent ">{{ $cetpro->tipo_gestion }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Programa de estudios: </td>
                <td class="indent ">{{ $programa->nombre }}</td>
                <td class="bold-column rows-1">Periodo lectivo</td>
                <td class="indent ">{{ date('Y') }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Módulo: </td>
                <td class="indent ">{{ $programa->modulo }}</td>
                <td class="bold-column rows-1">Periodo de clases: </td>
                <td class="indent ">{{ $programa->periodo_clases_inicio . ' AL ' . $programa->periodo_clases_final }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Nivel Formativo: </td>
                <td class="indent ">{{ $programa->nivel_formativo }}</td>
                <td class="bold-column rows-1">Periodo Académico</td>
                <td class="indent ">I</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Tipo de plan de estudios: </td>
                <td class="indent ">MODULAR</td>
                <td class="bold-column rows-1">Número de documento: </td>
                <td class="indent ">{{ $alumno->DNI }}</td>
            </tr>
            <tr>
                <td class="bold-column rows-1">Apellidos y nombres: </td>
                <td colspan="3" class="bold-column text-center name-upper">
                    {{ $alumno->ape_pater . ' ' . $alumno->ape_mater . ', ' . $alumno->full_name }}</td>
            </tr>

        </tbody>
    </table>

    <span class="second-tittle text-center">
        <p><b>UNIDADES DIDÁCTICAS</b></p>
    </span>
    <table class="second-table">
        <tbody>
            <tr class="shadow">
                <th>N°</th>
                <th>UNIDAD DIDÁCTICA</th>
                <th>CRÉDITOS</th>
                <th>HORAS</th>
                <th>CONDICIÓN</th>
            </tr>
            {{-- <h1>{{$curso}}</h1> --}}
            {{ $cont = 0 }}
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td class="text-center">{{ $cont += 1 }}</td>
                    @if ($cursos->count() > $i)
                        <td class="row-main indent ">{{ 'UD ' . $cont .' ' . $cursos[$i]->nombre }}</td>
                        <td class="text-center">{{ $cursos[$i]->creditos }}</td>
                        <td class="text-center">{{ $cursos[$i]->horas }}</td>
                        <td class="text-center">{{ $cursos[$i]->condicion }}</td>
                    @else
                        <td class="row-main indent "></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    @endif
                </tr>
            @endfor
        </tbody>
    </table>

    <span class="second-tittle text-center">
        <p><b>UNIDADES DIDÁCTICAS DE SUBSANACIÓN</b></p>
    </span>
    <table class="second-table">
        <tr>
            <th>N°</th>
            <th>UNIDAD DIDÁCTICA</th>
            <th>CRÉDITOS</th>
            <th>HORAS</th>
            <th>CONDICIÓN</th>
        </tr>
        <tr style=>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
    <div class="signature">
        <span class="span-1">________________</span>
        <span class="span-2">________________</span>
        <span class="span-3">________________</span>
        <h5 class="legend">
            <span>Estudiante <br>Firma</span>
        </h5>
    </div>

</body>

</html>
