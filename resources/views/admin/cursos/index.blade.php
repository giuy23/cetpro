@extends('layouts.app', ['pageSlug' => 'cursos'])

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
                <h4 class="d-flex align-items-center ml-4">Cursos</h4>
                <a href="{{ route('admin.cursos.create') }}"><button class="btn btn-info animation-on-hover d-flex mr-4"
                        type="button">Crear </button></a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Lista de Cursos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Horas</th>
                                    <th>Créditos</th>
                                    <th>Condición</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cursos as $curso)
                                    <tr>
                                        <td>{{ $curso->nombre}}</td>
                                        <td>{{ $curso->horas}}</td>
                                        <td>{{ $curso->creditos}}</td>
                                        <td>{{ $curso->condicion}}</td>
                                        <td width="10px">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.cursos.edit', $curso) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                                <form action="{{ route('admin.cursos.destroy', $curso) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="button" class="btn btn-danger btn-sm btn-delete"
                                                    data-cursos-id="{{ $curso->id }}">Eliminar</button>
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
