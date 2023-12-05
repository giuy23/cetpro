@extends('layouts.app', ['pageSlug' => 'programas'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.programas.index') }}" method="POST">
                    @csrf
                    <style>
                        /* Estilo por defecto del input */
                        input {
                            border: 1px solid #ccc;
                            padding: 8px;
                            transition: border-color 0.3s; /* Agrega una transición suave al cambio de color del borde */
                        }
                
                        /* Estilo cuando el input tiene el foco (está seleccionado) */
                        input:focus {
                            border-color: #007BFF; /* Cambia el color del borde cuando el input tiene el foco */
                            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Agrega una sombra suave */
                        }
                
                        /* Estilo cuando el input tiene un valor */
                        input:valid {
                            border-color: #28A745; /* Cambia el color del borde cuando el input tiene un valor válido */
                        }
                        div.form-group label {
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
                                <input type="text" class="form-control" id="nombre" name="nombre" required
                                    placeholder="Nombre">
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
                                <input type="date" class="form-control" id="periodo_clases_inicio"
                                    name="periodo_clases_inicio" required placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="periodo_clases_final">Fecha de finalización del Programa</label>
                                <input type="date" class="form-control" id="periodo_clases_final"
                                    name="periodo_clases_final" required placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nivel_formativo">Nivel Formativo</label>
                                <input type="text" class="form-control" id="nivel_formativo" name="nivel_formativo"
                                    required placeholder="Resolución de Autorización">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-group col-md-6">
                            <a data-toggle="collapse" href="#cursos-programa" aria-expanded="true" class="btn btn-info animation-on-hover">
                                {{-- <i class="fab fa-laravel"></i> --}}
                                <span class="nav-link-text">Cursos del programa</span>
                                {{-- <b class="caret mt-1"></b> --}}
                            </a>
                            <div class="card">
                                <div class="collapse" id="cursos-programa">
                                    <div class="card-body">
                                        {{-- <input class="form-check-input" type="checkbox" id="cursos_id" name="" value="{{ $curso->id }}"
                                        {{ null !== request('cursos_id') && in_array($curso->id, request('cursos_id')) ? 'checked' : '' }}> --}}


                                        {{-- @foreach ($cursos as $curso)
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="cursos_id"
                                                        value="{{ $curso->id }}">{{ $curso->nombre }}
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        @endforeach --}}
                                        @foreach ($cursos as $curso)
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="cursos_id" name="cursos[]" value="{{ $curso->id }}"
                                                    {{ null !== request('cursos') && in_array($curso->id, request('cursos')) ? 'checked' : '' }}>
                                                    {{ $curso->nombre }}
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
