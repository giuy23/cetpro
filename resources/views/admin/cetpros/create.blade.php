@extends('layouts.app', ['pageSlug' => 'cetpros'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.cetpros.index') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name_cetpro">Nombre</label>
                                <input type="text" class="form-control" id="name_cetpro" name="name_cetpro" required placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo_gestion">Tipo de Gestión</label>
                                <input type="text" class="form-control" id="tipo_gestion" name="tipo_gestion" required
                                    placeholder="Tipo de Gestión">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="resol_autoriza">Resolución de Autorización</label>
                                <input type="text" class="form-control" id="resol_autoriza" name="resol_autoriza" required
                                    placeholder="Resolución de Autorización">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required
                                    placeholder="Dirección">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control" id="lugar" name="lugar" required
                                    placeholder="Lugar">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="distrito">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" required
                                    placeholder="Distrito">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="provincia">Provincia</label>
                                <input type="text" class="form-control" id="provincia" name="provincia" required
                                    placeholder="Provincia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="departamento">Departamento</label>
                                <input type="text" class="form-control" id="departamento" name="departamento" required
                                    placeholder="Departamento">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="code_modular">Código Modular</label>
                                <input type="text" class="form-control" id="code_modular" name="code_modular" required
                                    placeholder="Código Modular">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ugel">Ugel</label>
                                <input type="text" class="form-control" id="ugel" name="ugel" required
                                    placeholder="Ugel">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="resol_programs">Resolución de Programas</label>
                                <input type="text" class="form-control" id="resol_programs" name="resol_programs" required
                                    placeholder="Resolución de Programas">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nivel_formativo">Nivel Formativo</label>
                                <input type="text" class="form-control" id="nivel_formativo" name="nivel_formativo" required
                                    placeholder="Nivel Formativo">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="telefono">Teléfono</label>
                                <input type="number" min="0" class="form-control" id="telefono" name="telefono" required
                                    placeholder="Teléfono">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" required
                                    placeholder="Celular">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="correo_inst">Correo Institucional</label>
                                <input type="text" class="form-control" id="correo_inst" name="correo_inst" required
                                    placeholder="Correo Institucional">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="pag_web">Página web</label>
                                <input type="text" class="form-control" id="pag_web" name="pag_web"
                                    placeholder="Página web">
                            </div>
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
                    alertError('El CELULAR debe tener 9 Dígitos', 'error');
                    errores = true; // Se encontró un error
                }
                if (!errores) {
                    form.submit();
                }
            });
        })
    </script>

@endsection
