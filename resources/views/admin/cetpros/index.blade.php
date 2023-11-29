@extends('layouts.app', ['pageSlug' => 'cetpros'])

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
                Cetpros
                <a href="{{ route('admin.cetpros.create') }}"><button class="btn btn-info animation-on-hover"
                        type="button">Crear </button></a>

            </div>
        </div>
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Lista de CEPTROS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo de Gestión</th>
                                    <th>N° Resolución</th>
                                    <th>Lugar</th>
                                    <th>Distrito</th>
                                    <th>Provincia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cetpros as $cetpro)
                                    <tr>
                                        <td>{{ $cetpro->name_cetpro}}</td>
                                        <td>{{ $cetpro->tipo_gestion}}</td>
                                        <td>{{ $cetpro->resol_programs}}</td>
                                        <td>{{ $cetpro->lugar}}</td>
                                        <td>{{ $cetpro->distrito}}</td>
                                        <td>{{ $cetpro->provincia}}</td>
                                        <td width="10px">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.cetpros.edit', $cetpro) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                                <form action="{{ route('admin.cetpros.destroy', $cetpro) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    {{-- <button type="submit" class="btn btn-danger btn-sm">Eliminar</button> --}}
                                                    <button type="button" class="btn btn-danger btn-sm btn-delete"
                                                    data-alumno-id="{{ $cetpro->id }}">Eliminar</button>
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
