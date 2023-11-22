@extends('layouts.app', ['pageSlug' => 'programas'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.programas.index') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="modulo">Módulo</label>
                                <input type="text" class="form-control" id="modulo" name="modulo" required
                                    placeholder="Tipo de Gestión">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="periodo_clases_inicio">Fecha de inicio del Programa</label>
                                <input type="date" class="form-control" id="periodo_clases_inicio" name="periodo_clases_inicio" required
                                    placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="periodo_clases_final">Fecha de finalización del Programa</label>
                                <input type="date" class="form-control" id="periodo_clases_final" name="periodo_clases_final" required
                                    placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nivel_formativo">Nivel Formativo</label>
                                <input type="text" class="form-control" id="nivel_formativo" name="nivel_formativo" required
                                    placeholder="Resolución de Autorización">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
