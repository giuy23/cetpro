@extends('layouts.app', ['pageSlug' => 'programas'])

@section('content')

@if (session('info'))
    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>
    <script>
        alertError('{{ session('info') }}', 'success');
    </script>
@endif

    <div class="row">
        <div class="card">
            <div class="card-body">
                Programas
                <a href="{{ route('admin.programas.create') }}"><button class="btn btn-info animation-on-hover"
                        type="button">Crear </button></a>

            </div>
        </div>
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Lista de Programas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Modulo</th>
                                    <th>Fecha de inicio de clases</th>
                                    <th>Fecha de finalización de clases</th>
                                    <th>Nivel de formación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programas as $programa)
                                    <tr>
                                        <td>{{ $programa->nombre}}</td>
                                        <td>{{ $programa->modulo}}</td>
                                        <td>{{ $programa->periodo_clases_inicio}}</td>
                                        <td>{{ $programa->periodo_clases_final}}</td>
                                        <td>{{ $programa->nivel_formativo}}</td>
                                        <td width="10px">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.programas.edit', $programa) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                                <form action="{{ route('admin.programas.destroy', $programa) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="button" class="btn btn-danger btn-sm btn-delete"
                                                    data-programa-id="{{ $programa->id }}">Eliminar</button>
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
