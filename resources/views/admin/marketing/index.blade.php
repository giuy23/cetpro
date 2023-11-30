@extends('layouts.app', ['pageSlug' => 'marketings'])

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
                <h4 class="d-flex align-items-center ml-4">Marketing</h4>
                <a href="{{ route('admin.marketings.create') }}"><button class="btn btn-info animation-on-hover d-flex mr-4"
                        type="button">Crear </button></a>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Lista de marketing</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Medio</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marketings as $marketing)
                                    <tr>
                                        <td>{{ $marketing->medio}}</td>
                                        <td>{{ $marketing->descripcion}}</td>
                                        <td width="10px">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.marketings.edit', $marketing) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                                <form action="{{ route('admin.marketings.destroy', $marketing) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="button" class="btn btn-danger btn-sm btn-delete"
                                                    data-marketing-id="{{ $marketing->id }}">Eliminar</button>
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
