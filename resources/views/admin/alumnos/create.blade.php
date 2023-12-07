@extends('layouts.app', ['pageSlug' => 'alumnos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.alumnos.index') }}" method="POST" id="formulario">
                    @csrf

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="ape_pater">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ape_pater" name="ape_pater" required
                                    placeholder="Apellido Paterno">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ape_mater">Apellido Materno</label>
                                <input type="text" class="form-control" id="ape_mater" name="ape_mater" required
                                    placeholder="Apellido Materno">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="full_name">Nombres</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required
                                    placeholder="Nombres Completos">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sexo">Sexo</label>
                                <input type="text" class="form-control" id="sexo" name="sexo" required
                                    placeholder="Sexo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="f_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" required
                                    placeholder="Fecha de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="DNI">DNI</label>
                                <input type="number" class="form-control" id="DNI" name="DNI" required
                                    placeholder="DNI" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="pais">País de Nacimiento</label>
                                <input type="text" class="form-control" id="pais" name="pais" required
                                    placeholder="País de Nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lu_nacimi">Lugar de nacimiento</label>
                                <input type="text" class="form-control" id="lu_nacimi" name="lu_nacimi" required
                                    placeholder="Lugar de nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ditri_nacimi">Distrito de nacimiento</label>
                                <input type="text" class="form-control" id="ditri_nacimi" name="ditri_nacimi" required
                                    placeholder="Distrito de nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provi_nacimi">Provincia de Nacimiento</label>
                                <input type="text" class="form-control" id="provi_nacimi" name="provi_nacimi" required
                                    placeholder="Provincia de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regi_nacimi">Región de Nacimiento</label>
                                <input type="text" class="form-control" id="regi_nacimi" name="regi_nacimi" required
                                    placeholder="Región de Nacimiento">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="ditri_actual">Distrito actual de residencia</label>
                                <input type="text" class="form-control" id="ditri_actual" name="ditri_actual" required
                                    placeholder="Distrito actual de residencia">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provi_actual">Provincia actual de residencia</label>
                                <input type="text" class="form-control" id="provi_actual" name="provi_actual" required
                                    placeholder="Provincia actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regi_actual">Región actual de residencia</label>
                                <input type="text" class="form-control" id="regi_actual" name="regi_actual" required
                                    placeholder="Región actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="direc_actual">Dirección actual de residencia</label>
                                <input type="text" class="form-control" id="direc_actual" name="direc_actual"
                                    required placeholder="Dirección actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="refe_direc">Referencia de Dirección</label>
                                <input type="text" class="form-control" id="refe_direc" name="refe_direc"
                                    placeholder="Referencia de Dirección">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="correo">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required
                                    placeholder="Correo Electrónico">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    placeholder="Facebook">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tel_fijo">Teléfono Fijo</label>
                                <input type="number" class="form-control" id="tel_fijo" name="tel_fijo"
                                    placeholder="Teléfono Fijo">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cel_propio">Celular Propio</label>
                                <input type="number" class="form-control" id="cel_propio" name="cel_propio" required
                                    placeholder="Celular Propio">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="operador_cel">Operador del celular</label>
                                <input type="text" class="form-control" id="operador_cel" name="operador_cel"
                                    placeholder="Operador del celular">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="aa_nn_emer">Apellidos y Nombres de su contacto de emergencia</label>
                                <input type="text" class="form-control" id="aa_nn_emer" name="aa_nn_emer" required
                                    placeholder="Apellidos y Nombres del Contacto de Emergencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="parent_emer">Parentezco</label>
                                <input type="text" class="form-control" id="parent_emer" name="parent_emer" required
                                    placeholder="Parentezco con la persona">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cel_emer">Celular</label>
                                <input type="number" class="form-control" id="cel_emer" name="cel_emer" required
                                    placeholder="Celular del Contacto de Emergencia">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="puesto_work">Puesto de trabajo</label>
                                <input type="text" class="form-control" id="puesto_work" name="puesto_work"
                                    placeholder="Puesto de trabajo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="est_civil">Estado civil</label>
                                <input type="text" class="form-control" id="est_civil" name="est_civil"
                                    placeholder="Estado civil">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nro_carga_fam">Carga Familiar</label>
                                <input type="number" min="0" class="form-control" id="nro_carga_fam" name="nro_carga_fam"
                                    placeholder="Carga Familiar">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="net_en_casa">¿Cuenta con Internet en Casa?</label>
                                <input type="text" class="form-control" id="net_en_casa" name="net_en_casa" required
                                    placeholder="¿Cuenta con Internet en Casa?">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="equipo_tec">Equipo con el que Cuenta</label>
                                <input type="text" class="form-control" id="equipo_tec" name="equipo_tec"
                                    placeholder="Equipo con el que Cuenta">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="discapacidad">Sufre Alguna Discapacidad?</label>
                                <input type="text" class="form-control" id="discapacidad" name="discapacidad"
                                    placeholder="Sufre Alguna Discapacidad?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="religion">Religión</label>
                                <input type="text" class="form-control" id="religion" name="religion"
                                    placeholder="Religión">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lengua_mater">Lengua Materna</label>
                                <input type="text" class="form-control" id="lengua_mater" name="lengua_mater"
                                    placeholder="Lengua Materna">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cetpro_id">CETPRO</label>
                                <select id="cetpro_id" name="cetpro_id" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        <option value="{{ $cetpro->id }}" class="text-muted">{{ $cetpro->name_cetpro }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="programa_estudio_id">PROGRAMA</label>
                                <select id="programa_estudio_id" name="programa_estudio_id" required
                                    class="form-control">
                                    @foreach ($programas as $programa)
                                        <option value="{{ $programa->id }}" class="text-muted">{{ $programa->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cetpro_id">MODULO</label>
                                <select id="cetpro_id" name="cetpro_id" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        <option value="{{ $cetpro->id }}" class="text-muted">{{ $cetpro->name_cetpro }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cetpro_id">UNIDADES</label>
                                <select id="cetpro_id" name="cetpro_id" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        <option value="{{ $cetpro->id }}" class="text-muted">{{ $cetpro->name_cetpro }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cetpro_id">COMPETENCIAS</label>
                                <select id="cetpro_id" name="cetpro_id" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        <option value="{{ $cetpro->id }}" class="text-muted">{{ $cetpro->name_cetpro }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cetpro_id">CAPACIDADES</label>
                                <select id="cetpro_id" name="cetpro_id" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        <option value="{{ $cetpro->id }}" class="text-muted">{{ $cetpro->name_cetpro }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="anio_academi">Año academico</label>
                                <input type="number" class="form-control" id="anio_academi" name="anio_academi"
                                    required placeholder="Año academico">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="code_inscrip">Código de inscripción</label>
                                <input type="text" class="form-control" id="code_inscrip" name="code_inscrip"
                                    required placeholder="Código de inscripción">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="expects">Expectativas</label>
                                <textarea class="form-control" id="expects" name="expects" rows="3" placeholder="Expectativas"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="marketing_id">Medio</label>
                                <select id="marketing_id" name="marketing_id" required class="form-control">
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
