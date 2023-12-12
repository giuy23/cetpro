@extends('layouts.app', ['pageSlug' => 'unidades'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.unidades.update', $unidad) }}" method="POST"> <!-- VERIFICAR -->
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
                                <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$unidad->nombre}}" placeholder="Nombre">
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="creditos">Creditos</label>
                                <input type="text" class="form-control" id="creditos" name="creditos" required value="{{$unidad->creditos}}" placeholder="Creditos">
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="horas">Horas</label>
                                <input type="text" class="form-control" id="horas" name="horas" required value="{{$unidad->horas}}" placeholder="Horas">
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="condicion">Condicion</label>
                                <input type="text" class="form-control" id="condicion" name="condicion" required value="{{$unidad->condicion}}" placeholder="Condicion">
                            </div>  
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="modulo_id">MODULO</label>
                            <select id="modulo_id" name="modulo_id" required class="form-control">
                                @foreach ($modulos as $modulo)
                                    @if ($modulo->id == $unidad->modulo_id)
                                        {
                                        <option value="{{ $modulo->id }}" selected class="text-muted">
                                            {{ $modulo->nom_modulo }}</option>
                                        }
                                    @else
                                        <option value="{{ $modulo->id }}" class="text-muted">
                                            {{ $modulo->nom_modulo }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
