@extends('layouts.app', ['pageSlug' => 'alumnos'])
{{-- @extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables']) --}}

@section('content')
    <div class="row">
        <div class="card">
            <div class="d-flex justify-content-between">
                <h4 class="d-flex align-items-center ml-4">Alumnos</h4>
                <a href="{{ route('admin.alumnos.create') }}"><button class="btn btn-info animation-on-hover d-flex mr-4"
                    type="button">Crear </button></a>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Lista de alumnos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>N° Celular</th>
                                    <th>Año Académico</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->full_name }}</td>
                                        <td>{{ $alumno->ape_pater }}</td>
                                        <td>{{ $alumno->ape_mater }}</td>
                                        <td>{{ $alumno->cel_propio }}</td>
                                        <td>{{ $alumno->anio_academi }}</td>
                                        <td width="10px">
                                                <a class="btn btn-success btn-sm"
                                                    href="{{ route('admin.alumnos.edit', $alumno) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            <a class="btn btn-info btn-sm" target="_blank"
                                                {{-- href="{{ route('admin.alumnos.pdf', $alumno->id) }}">PDF</a> --}}
                                                href="{{ route('admin.alumnos.show', $alumno) }}">PDF</a>
                                    </td>
                                        <td width="10px">
                                                <form action="{{ route('admin.alumnos.destroy', $alumno) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
