@extends('layouts.app', ['pageSlug' => 'cursos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.cursos.index') }}" method="POST">
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
                                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="creditos">Créditos</label>
                                <input type="number" min="0" class="form-control" id="creditos" name="creditos" required
                                    placeholder="Tipo de Gestión">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="horas">Horas</label>
                                <input type="number" min="0" class="form-control" id="horas" name="horas" required
                                    placeholder="Resolución de Autorización">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="condicion">Condición</label>
                                <input type="text" class="form-control" id="condicion" name="condicion" required
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
