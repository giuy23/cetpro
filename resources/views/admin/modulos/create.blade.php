@extends('layouts.app', ['pageSlug' => 'modulos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.modulos.index') }}" method="POST" id="formulario">
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
                                <label for="nom_modulo">Nombre</label>
                                <input type="text" class="form-control" id="nom_modulo" name="nom_modulo" required placeholder="Nombre">
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