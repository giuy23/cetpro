@extends('layouts.app', ['pageSlug' => 'matricula'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.matricula.store') }}" method="POST">
                    @csrf
                    <div class="form-group col-md-4">
                        <label for="user_id">ALUMNOS</label>
                        <select id="user_id" name="user_id" required
                            class="form-control">
                            <option value=null></option>
                            @foreach ($alumnos as $alumno)
                                    <option value="{{ $alumno->id }}" class="text-muted">{{ $alumno->ape_pater }}
                                    </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="programa_id">PROGRAMA</label>
                        <select id="programa_id" name="programa_id" required
                            class="form-control">
                            <option value="1">aea</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="modulo_id">MODULO</label>
                        <select id="modulo_id" name="modulo_id" required class="form-control">
                            <option value="1">aea</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="unidad_id">UNIDADES</label>
                        <select id="unidad_id" name="unidad_id" required class="form-control">
                            <option value="1">aea</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="competencia_id">COMPETENCIAS</label>
                        <select id="competencia_id" name="competencia_id" required class="form-control">
                            <option value="1">aea</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="capacidad_id">CAPACIDADES</label>
                        <select id="capacidad_id" name="capacidad_id" required class="form-control">
                            <option value="1">aea</option>
                        </select>
                    </div>
        

                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
