<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    .section-tittle{
        margin-top: -50px;
    }
.section-tittle div {
    float: left;
    margin-right: 100px; /* Ajusta el margen según sea necesario */
}

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
</style>
<body>
    <section class="section-tittle">
        <div class="">
            <figure class="">
                <img width="100px" src="{{ public_path('black/img/bg5.jpg') }}">
                {{-- <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Profile Photo') }}"> --}}
            </figure>
        </div>
        <div class="col-md-6">
            <p class="">FICHA DE REGISTRO DE MATRICULA<br> AÑO 2023</p>
        </div>
    </section>

    <table class="first-table">
        <tbody>
                <tr>
                    <td>Nombre del CETPRO: </td>
                    <td></td>
                    <td>DRE/GRE: </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Código modular</td>
                    <td></td>
                    <td>Tipo de Gestión</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Departamento: </td>
                    <td></td>
                    <td>Provincia: </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Distrito: </td>
                    <td></td>
                    <td>Tipo de Gestión</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Programa de estudios: </td>
                    <td></td>
                    <td>Periodo lectivo</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Módulo: </td>
                    <td></td>
                    <td>Periodo de clases: </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nivel Formativo: </td>
                    <td></td>
                    <td>Periodo Académico</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tipo de plan de estudios: </td>
                    <td></td>
                    <td>Número de documento: </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Apellidos y nombres: </td>
                    <td colspan="3"></td>
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
                <td></td>
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
