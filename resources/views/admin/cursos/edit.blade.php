@extends('layouts.app', ['pageSlug' => 'cursos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.cursos.update', $curso) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <style>
                        div.form-group label{
                            color: white;
                            font-size: 15px;
                        }
                        div.form-group input{
                            font-size: 14px;
                        }
                    </style>
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$curso->nombre}}" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="creditos">Créditos</label>
                                <input type="number" min="0" class="form-control" id="creditos" name="creditos" required value="{{$curso->creditos}}"
                                    placeholder="Tipo de Gestión">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="horas">Horas</label>
                                <input type="number" min="0" class="form-control" id="horas" name="horas" required value="{{$curso->horas}}"
                                    placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="condicion">Condición</label>
                                <input type="text" class="form-control" id="condicion" name="condicion" required value="{{$curso->condicion}}"
                                    placeholder="Resolución de Autorización">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
