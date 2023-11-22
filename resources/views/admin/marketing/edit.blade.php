@extends('layouts.app', ['pageSlug' => 'marketings'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.marketings.update', $marketing) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="medio">Medio</label>
                                <input type="text" class="form-control" id="medio" name="medio" required value="{{$marketing->medio}}" placeholder="medio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$marketing->descripcion}}"
                                    placeholder="Tipo de Gestión">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
