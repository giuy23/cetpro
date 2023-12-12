@extends('layouts.app', ['pageSlug' => 'modulos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.modulos.update', $modulo) }}" method="POST">
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
                                <label for="nom_modulo">Nombre</label>
                                <input type="text" class="form-control" id="nom_modulo" name="nom_modulo" required value="{{$modulo->nom_modulo}}" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fec_inicio">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="fec_inicio" name="fec_inicio" required value="{{$modulo->fec_inicio}}" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fec_final">Fecha de Finalización</label>
                                <input type="date" class="form-control" id="fec_final" name="fec_final" required value="{{$modulo->fec_final}}" placeholder="">
                            </div>
                        </div>    
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
