@extends('layouts.app', ['pageSlug' => 'modulos'])

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
            <h4 class="d-flex align-items-center ml-4">Modulos</h4>
            <a href="{{ route('admin.modulos.create') }}"><button class="btn btn-info animation-on-hover d-flex mr-4"
                    type="button">Crear </button></a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title"> Lista de MODULOS</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modulos as $modulo)
                                <tr>
                                    <td>{{ $modulo->nom_modulo}}</td>

                                    <td width="10px">
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('admin.modulos.edit', $modulo) }}">Editar</a>
                                    </td>
                                    <td width="10px">
                                            <form action="{{ route('admin.modulos.destroy', $modulo) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')

                                                {{-- <button type="submit" class="btn btn-danger btn-sm">Eliminar</button> --}}
                                                <button type="button" class="btn btn-danger btn-sm btn-delete"
                                                data-alumno-id="{{ $modulo->id }}">Eliminar</button>
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