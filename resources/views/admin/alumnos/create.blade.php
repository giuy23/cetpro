@extends('layouts.app', ['pageSlug' => 'alumnos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.alumnos.index') }}" method="POST" id="formulario">
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
                        /*#miLabel {
                            color: white;
                        }*/
                        div.form-group label {
                            color: white;
                            font-size: 15px;
                        }

                    </style>


                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label id="miLabel" name="dad" for="ape_pater" style= "font-size: 14px;
                                ">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ape_pater" name="ape_pater" style="font-size: 13px" required
                                    placeholder="Apellido Paterno">
                            </div>
                            <div class="form-group col-md-4">
                                <label id="miLabel" for="ape_mater" style= "font-size: 14px;">Apellido Materno</label>
                                <input type="text" class="form-control" id="ape_mater" name="ape_mater" style="font-size: 13px" required
                                    placeholder="Apellido Materno">
                            </div>
                            <div class="form-group col-md-4">
                                <label id="miLabel" for="full_name" style= "font-size: 14px;">Nombres</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" style="font-size: 13px" required
                                    placeholder="Nombres Completos">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sexo" style= "font-size: 14px;
                                color: white;">Sexo</label>
                                <input type="text" class="form-control" id="sexo" name="sexo" style="font-size: 13px" required
                                    placeholder="Sexo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="f_nacimiento" style= "font-size: 14px;
                                color: white;">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" style="font-size: 13px" required
                                    placeholder="Fecha de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="DNI" style= "font-size: 14px;
                                color: white;">DNI</label>
                                <input type="number" class="form-control" id="DNI" name="DNI" style="font-size: 13px" required
                                    placeholder="DNI" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="pais" style= "font-size: 14px;
                                color: white;">País de Nacimiento</label>
                                <input type="text" class="form-control" id="pais" name="pais" style="font-size: 13px" required
                                    placeholder="País de Nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lu_nacimi" style= "font-size: 14px;
                                color: white;">Lugar de nacimiento</label>
                                <input type="text" class="form-control" id="lu_nacimi" name="lu_nacimi" style="font-size: 13px" required
                                    placeholder="Lugar de nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ditri_nacimi" style= "font-size: 14px;
                                color: white;">Distrito de nacimiento</label>
                                <input type="text" class="form-control" id="ditri_nacimi" name="ditri_nacimi" style="font-size: 13px" required
                                    placeholder="Distrito de nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provi_nacimi" style= "font-size: 14px;
                                color: white;">Provincia de Nacimiento</label>
                                <input type="text" class="form-control" id="provi_nacimi" name="provi_nacimi" style="font-size: 13px" required
                                    placeholder="Provincia de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regi_nacimi" style= "font-size: 14px;
                                color: white;">Región de Nacimiento</label>
                                <input type="text" class="form-control" id="regi_nacimi" name="regi_nacimi" style="font-size: 13px" required
                                    placeholder="Región de Nacimiento">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="ditri_actual" style= "font-size: 14px;
                                color: white;">Distrito actual de residencia</label>
                                <input type="text" class="form-control" id="ditri_actual" name="ditri_actual" style="font-size: 13px" required
                                    placeholder="Distrito actual de residencia">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provi_actual" style= "font-size: 14px;
                                color: white;">Provincia actual de residencia</label>
                                <input type="text" class="form-control" id="provi_actual" name="provi_actual" style="font-size: 13px" required
                                    placeholder="Provincia actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regi_actual" style= "font-size: 14px;
                                color: white;">Región actual de residencia</label>
                                <input type="text" class="form-control" id="regi_actual" name="regi_actual" style="font-size: 13px" required
                                    placeholder="Región actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="direc_actual" style= "font-size: 14px;
                                color: white;">Dirección actual de residencia</label>
                                <input type="text" class="form-control" id="direc_actual" name="direc_actual" style="font-size: 13px" required
                                    required placeholder="Dirección actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="refe_direc" style= "font-size: 14px;
                                color: white;">Referencia de Dirección</label>
                                <input type="text" class="form-control" id="refe_direc" name="refe_direc" style="font-size: 13px" required
                                    placeholder="Referencia de Dirección">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="correo" style= "font-size: 14px;
                                color: white;">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" style="font-size: 13px" required
                                    placeholder="Correo Electrónico">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="facebook" style= "font-size: 14px;
                                color: white;">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" style="font-size: 13px" required
                                    placeholder="Facebook">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tel_fijo" style= "font-size: 14px;
                                color: white;">Teléfono Fijo</label>
                                <input type="number" class="form-control" id="tel_fijo" name="tel_fijo" style="font-size: 13px" required
                                    placeholder="Teléfono Fijo">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cel_propio" style= "font-size: 14px;
                                color: white;">Celular Propio</label>
                                <input type="number" class="form-control" id="cel_propio" name="cel_propio" style="font-size: 13px" required
                                    placeholder="Celular Propio">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="operador_cel" style= "font-size: 14px;
                                color: white;">Operador del celular</label>
                                <input type="text" class="form-control" id="operador_cel" name="operador_cel" style="font-size: 13px" required
                                    placeholder="Operador del celular">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="aa_nn_emer" style= "font-size: 14px;
                                color: white;">Apellidos y Nombres de su contacto de emergencia</label>
                                <input type="text" class="form-control" id="aa_nn_emer" name="aa_nn_emer" style="font-size: 13px" required
                                    placeholder="Apellidos y Nombres del Contacto de Emergencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="parent_emer" style= "font-size: 14px;
                                color: white;">Parentezco</label>
                                <input type="text" class="form-control" id="parent_emer" name="parent_emer" style="font-size: 13px" required
                                    placeholder="Parentezco con la persona">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cel_emer" style= "font-size: 14px;
                                color: white;">Celular</label>
                                <input type="number" class="form-control" id="cel_emer" name="cel_emer" style="font-size: 13px" required
                                    placeholder="Celular del Contacto de Emergencia">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="puesto_work" style= "font-size: 14px;
                                color: white;">Puesto de trabajo</label>
                                <input type="text" class="form-control" id="puesto_work" name="puesto_work" style="font-size: 13px" required
                                    placeholder="Puesto de trabajo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="est_civil" style= "font-size: 14px;
                                color: white;">Estado civil</label>
                                <input type="text" class="form-control" id="est_civil" name="est_civil" style="font-size: 13px" required
                                    placeholder="Estado civil">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nro_carga_fam" style= "font-size: 14px;
                                color: white;">Carga Familiar</label>
                                <input type="number" min="0" class="form-control" id="nro_carga_fam" name="nro_carga_fam" style="font-size: 13px" required
                                    placeholder="Carga Familiar">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="net_en_casa" style= "font-size: 14px;
                                color: white;">¿Cuenta con Internet en Casa?</label>
                                <input type="text" class="form-control" id="net_en_casa" name="net_en_casa" style="font-size: 13px" required
                                    placeholder="¿Cuenta con Internet en Casa?">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="equipo_tec" style= "font-size: 14px;
                                color: white;">Equipo con el que Cuenta</label>
                                <input type="text" class="form-control" id="equipo_tec" name="equipo_tec" style="font-size: 13px" required
                                    placeholder="Equipo con el que Cuenta">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="discapacidad" style= "font-size: 14px;
                                color: white;">Sufre Alguna Discapacidad?</label>
                                <input type="text" class="form-control" id="discapacidad" name="discapacidad" style="font-size: 13px" required
                                    placeholder="Sufre Alguna Discapacidad?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="religion" style= "font-size: 14px;
                                color: white;">Religión</label>
                                <input type="text" class="form-control" id="religion" name="religion" style="font-size: 13px" required
                                    placeholder="Religión">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lengua_mater" style= "font-size: 14px;
                                color: white;">Lengua Materna</label>
                                <input type="text" class="form-control" id="lengua_mater" name="lengua_mater" style="font-size: 13px" required
                                    placeholder="Lengua Materna">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cetpro_id" style= "font-size: 14px;
                                color: white;">CETPRO</label>
                                <select id="cetpro_id" name="cetpro_id" style="font-size: 13px" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        <option value="{{ $cetpro->id }}" class="text-muted">{{ $cetpro->name_cetpro }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="anio_academi" style= "font-size: 14px;
                                color: white;">Año academico</label>
                                <input type="number" class="form-control" id="anio_academi" name="anio_academi" style="font-size: 13px"
                                    required placeholder="Año academico">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="programa_estudio_id" style= "font-size: 14px;
                                color: white;">Programa de estudio</label>
                                <select id="programa_estudio_id" name="programa_estudio_id" style="font-size: 13px" required
                                    class="form-control">
                                    @foreach ($programas as $programa)
                                        <option value="{{ $programa->id }}" class="text-muted">{{ $programa->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="code_inscrip" style= "font-size: 14px;
                                color: white;">Código de inscripción</label>
                                <input type="text" class="form-control" id="code_inscrip" name="code_inscrip" style="font-size: 13px"
                                    required placeholder="Código de inscripción">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="expects" style= "font-size: 14px;
                                color: white;">Expectativas</label>
                                <textarea class="form-control" id="expects" name="expects" rows="3" placeholder="Expectativas" style="font-size: 13px" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="marketing_id" style= "font-size: 14px;
                                color: white;">Medio</label>
                                <select id="marketing_id" name="marketing_id" style="font-size: 13px" required class="form-control">
                                    @foreach ($marketings as $marketing)
                                        <option value="{{ $marketing->id }}" class="text-muted">{{ $marketing->medio }}
                                        </option>
                                    @endforeach
                                </select>
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
            let errores = false; // Variable para rastrear errores


            btn.addEventListener('click', (e) => {

                e.preventDefault();

                // Reinicia la variable errores a false antes de verificar cada campo
                errores = false;

                const form = document.getElementById('formulario');
                let tel_fijo = document.getElementById('tel_fijo').value;
                let anio_academico = document.getElementById('anio_academi').value;
                let dni = document.getElementById('DNI').value;

                if (dni.length != 8) {
                    alertError(`El DNI debe tener 8 dígitos`, 'error');
                    errores = true;
                }

                let numeros = ['cel_propio', 'cel_emer'];
                let campos_numeros = ['CELULAR PROPIO', 'CELULAR EMERGENCIA'];
                let cont = 0;
                for (const campo of numeros) {
                    let validar = document.getElementById(campo).value;
                    if (validar.length != 9) {
                        alertError(`El ${campos_numeros[cont]} debe tener 9 dígitos`, 'error');
                        errores = true; // Se encontró un error
                        break;
                    }
                    cont += 1;
                }

                let letras = ['pais', 'lu_nacimi', 'ditri_nacimi', 'provi_nacimi', 'regi_nacimi',];
                let campos_letras = ['PAÍS', 'LUGAR DE NACIMIENTO', 'DISTRITO DE NACIMIENTO',
                    'PROVINCIA DE NACIMIENTO', 'REGIÓN DE NACIMIENTO',
                ];
                cont = 0;
                for (const campo of letras) {
                    let validar = document.getElementById(campo).value;
                    if (!regex.test(validar)) {
                        alertError(`${campos_letras[cont]} debe contener solo letras`, 'error');
                        errores = true; // Se encontró un error
                        console.log(cont);
                    }
                    cont += 1;
                }

                if (tel_fijo.length != 10) {
                    alertError('El TELEFONO FIJO debe tener 10 dígitos', 'error');
                    errores = true; // Se encontró un error
                }
                if (anio_academico.length != 4) {
                    alertError('El AÑO debe tener 4 Dígitos', 'error');
                    errores = true; // Se encontró un error
                }
                // Enviar el formulario solo si no hay errores
                if (!errores) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
