@extends('layouts.app', ['pageSlug' => 'programas'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.programas.update', $programa) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required
                                    value="{{ $programa->nombre }}" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="modulo">Módulo</label>
                                <input type="text" class="form-control" id="modulo" name="modulo" required
                                    value="{{ $programa->modulo }}" placeholder="Tipo de Gestión">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="periodo_clases_inicio">Fecha de inicio del Programa</label>
                                <input type="date" class="form-control" id="periodo_clases_inicio"
                                    name="periodo_clases_inicio" required value="{{ $programa->periodo_clases_inicio }}"
                                    placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="periodo_clases_final">Fecha de finalización del Programa</label>
                                <input type="date" class="form-control" id="periodo_clases_final"
                                    name="periodo_clases_final" required value="{{ $programa->periodo_clases_final }}"
                                    placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nivel_formativo">Nivel Formativo</label>
                                <input type="text" class="form-control" id="nivel_formativo" name="nivel_formativo"
                                    required value="{{ $programa->nivel_formativo }}"
                                    placeholder="Resolución de Autorización">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="collapse show" id="cursos-programa">
                            <div class="card-body">
                                @foreach ($cursos as $curso)
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="cursos_id" name="cursos[]"
                                                value="{{ $curso->id }}"
                                                {{ in_array($curso->id, $programa->cursos->pluck('id')->toArray()) ? 'checked' : '' }}>
                                            {{ $curso->nombre }}
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
