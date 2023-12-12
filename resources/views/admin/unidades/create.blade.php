@extends('layouts.app', ['pageSlug' => 'unidades'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.unidades.index') }}" method="POST" id="formulario">
                    @csrf
                    <style>
                        
                        div.form-group label{
                            font-size: 15px;
                            color: white;
                        }
                        div.form-group input{
                            font-size: 14px;
                        }
                    </style>
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nombre">Nombre del Módulo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="credito">Créditos</label>
                                <input type="number" class="form-control" id="creditos" name="creditos" required placeholder="Creditos">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="horas">Horas</label>
                                <input type="number" class="form-control" id="horas" name="horas" required placeholder="Horas">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="condicion">Condicion</label>
                                <input type="text" class="form-control" id="condicion" name="condicion" required placeholder="Condición">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="modulo_id" style= "font-size: 14px;
                                color: white;">Modulo</label>
                                <select id="modulo_id" name="modulo_id" style="font-size: 13px" required class="form-control">
                                    <option value="" disabled selected>Seleccione un módulo</option>
                                    @foreach ($modulos as $modulo)
                                        <option value="{{ $modulo->id }}" class="text-muted">{{ $modulo->nom_modulo }}</option>
                                    @endforeach
                                </select>   
                            </div>
                    </div>                        

                    <button type="submit" class="btn btn-primary" id="btn-submit">Crear Registro</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (e) => {
            let btn = document.getElementById('btn-submit');
            let regex = /^[A-Za-z\s]+$/;
            let errores = false; 
            btn.addEventListener('click', (e) => {
                const form = document.getElementById('formulario');
                let tel_fijo = document.getElementById('telefono').value;
                let celular = document.getElementById('celular').value;
            e.preventDefault();
            errores = false;

            if (tel_fijo.length != 10) {
                    alertError('El TELEFONO FIJO debe tener 10 dígitos', 'error');
                    errores = true; // Se encontró un error
                }
                if (celular.length != 9) {
                    alertError('El CELULAR debe tener 9   Dígitos', 'error');
                    errores = true; // Se encontró un error
                }
                if (!errores) {
                    form.submit();
                }
            });
        })
    </script>

@endsection