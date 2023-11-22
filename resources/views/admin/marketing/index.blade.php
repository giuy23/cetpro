@extends('layouts.app', ['pageSlug' => 'marketings'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                Marketing
                <a href="{{ route('admin.marketings.create') }}"><button class="btn btn-info animation-on-hover"
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
