<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
/* SECTION */
.section-tittle{
        margin-top: -50px;
    }
.section-tittle div {
    float: left;
    margin-right: 100px; /* Ajusta el margen según sea necesario */
}
.tittle{
    margin-left: 10%;
    font-weight: bold;
}
.anio{
    text-align: center;
    margin-top: -3%;
}    

/* TABLE */

.first-table{
    margin-top: 10%;
}

    table{
        width: 100%;
    }
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

.bold-column{
    font-weight: bold;
}
.rows-1{
    width: 25%;
}
.text-center{
    text-align: center;
}

</style>
<body>
    <section class="section-tittle">
        <div class="">
            <figure class="">
                <img width="100px" src="{{ public_path('black/img/bg5.jpg') }}">
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
                    <td>{{$cetpro->name_cetpro}}</td>
                    <td class="bold-column rows-1">DRE/GRE: </td>
                    <td>{{$cetpro->ugel}}</td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Código modular</td>
                    <td>{{$cetpro->code_modular}}</td>
                    <td class="bold-column rows-1">Tipo de Gestión</td>
                    <td>{{$cetpro->tipo_gestion}}</td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Departamento: </td>
                    <td>{{$cetpro->departamento}}</td>
                    <td class="bold-column rows-1">Provincia: </td>
                    <td>{{$cetpro->provincia}}</td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Distrito: </td>
                    <td>{{$cetpro->distrito}}</td>
                    <td class="bold-column rows-1">Tipo de Gestión</td>
                    <td>{{$cetpro->tipo_gestion}}</td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Programa de estudios: </td>
                    <td>{{$alumno->prog_estudio}}</td>
                    <td class="bold-column rows-1">Periodo lectivo</td>
                    <td>{{date('Y')}}</td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Módulo: </td>
                    <td></td>
                    <td class="bold-column rows-1">Periodo de clases: </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Nivel Formativo: </td>
                    <td></td>
                    <td class="bold-column rows-1">Periodo Académico</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Tipo de plan de estudios: </td>
                    <td></td>
                    <td class="bold-column rows-1">Número de documento: </td>
                    <td>{{$alumno->DNI}}</td>
                </tr>
                <tr>
                    <td class="bold-column rows-1">Apellidos y nombres: </td>
                    <td colspan="3" class="bold-column text-center">{{$alumno->ape_pater.' '. $alumno->ape_mater.', '.$alumno->full_name}}</td>
                </tr>

        </tbody>
    </table>

    <span><h5><b>UNIDADES DIDÁCTICAS</b></h5></span>
    <table>
        <tbody>
            <tr>
                <th>N°</th>
                <th>UNIDAD DIDÁCTICA</th>
                <th>CRÉDITOS</th>
                <th>HORAS</th>
                <th>CONDICIÓN</th>
            </tr>
            {{$cont = 0}}
            
            @for ($i = 0; $i < 10; $i++)
            <tr>
                <td>{{$cont+=1}}</td>
                <td>{{'UD'.$cont}}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endfor
            {{-- @foreach ($nums as $num)

                <tr>
                    <td>{{$cont+1}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    <span><h5><b>UNIDADES DIDÁCTICAS</b></h5></span>
    <table>
        <tr>
            <th>N°</th>
            <th>UNIDAD DIDÁCTICA</th>
            <th>CRÉDITOS</th>
            <th>HORAS</th>
            <th>CONDICIÓN</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <span>____________</span>
</body>
</html>
