@extends('layouts.app', ['pageSlug' => 'marketings'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.marketings.index') }}" method="POST">
                    @csrf
                    <style>
                        /* Estilo por defecto del input */
                
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
                                <label for="medio">Medio</label>
                                <input type="text" class="form-control" id="medio" name="medio" required placeholder="medio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" required
                                    placeholder="Tipo de Gestión">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
