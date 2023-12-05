@extends('layouts.app', ['pageSlug' => 'alumnos'])

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

@if (session('info'))
    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>
    <script>
        alertError('{{ session('info') }}', 'success');
    </script>
@endif


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
                        <table class="table tablesorter" id="alumnos">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>N° Celular</th>
                                    <th>Año Académico</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
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
                                            <a class="btn btn-success btn-sm" href="{{ route('admin.alumnos.edit', $alumno) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            <a class="btn btn-info btn-sm" target="_blank" href="{{ route('admin.alumnos.show', $alumno) }}">PDF</a>
                                        </td>
                                        <td width="10px">
                                            <form action="{{ route('admin.alumnos.destroy', $alumno) }}" method="POST" id="form-delete">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-danger btn-sm btn-delete" data-alumno-id="{{ $alumno->id }}">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        @section('js')
                        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
                        <script>new DataTable('#alumnos');</script>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>

    <script>
        document.querySelectorAll('.btn-delete').forEach((button) => {
            button.addEventListener('click', function() {
                const form = this.closest('form');
                confirmDelete(form);
            });
        });
    </script>
@endsection
