@extends('layouts.app', ['pageSlug' => 'alumnos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.alumnos.update', $alumno) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="ape_pater">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ape_pater" name="ape_pater" required
                                    value="{{ $alumno->ape_pater }}" placeholder="Apellido Paterno">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ape_mater">Apellido Materno</label>
                                <input type="text" class="form-control" id="ape_mater" name="ape_mater" required
                                    value="{{ $alumno->ape_mater }}" placeholder="Apellido Materno">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="full_name">Nombres</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required
                                    value="{{ $alumno->full_name }}" placeholder="Nombres Completos">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sexo">Sexo</label>
                                <input type="text" class="form-control" id="sexo" name="sexo" required
                                    value="{{ $alumno->sexo }}" placeholder="Sexo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="f_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" required
                                    value="{{ $alumno->f_nacimiento }}" placeholder="Fecha de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="DNI">DNI</label>
                                <input type="number" class="form-control" id="DNI" name="DNI" required
                                    value="{{ $alumno->DNI }}" placeholder="DNI">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="pais">País de Nacimiento</label>
                                <input type="text" class="form-control" id="pais" name="pais" required
                                    value="{{ $alumno->pais }}" placeholder="País de Nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lu_nacimi">Lugar de nacimiento</label>
                                <input type="text" class="form-control" id="lu_nacimi" name="lu_nacimi" required
                                    value="{{ $alumno->lu_nacimi }}" placeholder="Lugar de nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ditri_nacimi">Distrito de nacimiento</label>
                                <input type="text" class="form-control" id="ditri_nacimi" name="ditri_nacimi" required
                                    value="{{ $alumno->ditri_nacimi }}" placeholder="Distrito de nacimiento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provi_nacimi">Provincia de Nacimiento</label>
                                <input type="text" class="form-control" id="provi_nacimi" name="provi_nacimi" required
                                    value="{{ $alumno->provi_nacimi }}" placeholder="Provincia de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regi_nacimi">Región de Nacimiento</label>
                                <input type="text" class="form-control" id="regi_nacimi" name="regi_nacimi" required
                                    value="{{ $alumno->regi_nacimi }}" placeholder="Región de Nacimiento">
                            </div>
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-3">
                                <label for="ditri_actual">Distrito actual de residencia</label>
                                <input type="text" class="form-control" id="ditri_actual" name="ditri_actual" required
                                    value="{{ $alumno->ditri_actual }}" placeholder="Distrito actual de residencia">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provi_actual">Provincia actual de residencia</label>
                                <input type="text" class="form-control" id="provi_actual" name="provi_actual" required
                                    value="{{ $alumno->provi_actual }}" placeholder="Provincia actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regi_actual">Región actual de residencia</label>
                                <input type="text" class="form-control" id="regi_actual" name="regi_actual" required
                                    value="{{ $alumno->regi_actual }}" placeholder="Región actual de residencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="direc_actual">Dirección Actual</label>
                                <input type="text" class="form-control" id="direc_actual" name="direc_actual"
                                    required value="{{ $alumno->direc_actual }}" placeholder="Dirección Actual">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="refe_direc">Referencia de Dirección</label>
                                <input type="text" class="form-control" id="refe_direc" name="refe_direc"
                                    value="{{ $alumno->refe_direc }}" placeholder="Referencia de Dirección">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="correo">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required
                                    value="{{ $alumno->correo }}" placeholder="Correo Electrónico">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    value="{{ $alumno->facebook }}" placeholder="Facebook">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tel_fijo">Teléfono Fijo</label>
                                <input type="number" class="form-control" id="tel_fijo" name="tel_fijo"
                                    value="{{ $alumno->tel_fijo }}" placeholder="Teléfono Fijo">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cel_propio">Celular Propio</label>
                                <input type="number" class="form-control" id="cel_propio" name="cel_propio" required
                                    value="{{ $alumno->cel_propio }}" placeholder="Celular Propio">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="operador_cel">Operador del celular</label>
                                <input type="text" class="form-control" id="operador_cel" name="operador_cel"
                                    value="{{ $alumno->operador_cel }}" placeholder="Operador del celular">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="aa_nn_emer">Apellidos y Nombres del Contacto de Emergencia</label>
                                <input type="text" class="form-control" id="aa_nn_emer" name="aa_nn_emer" required
                                    value="{{ $alumno->aa_nn_emer }}"
                                    placeholder="Apellidos y Nombres del Contacto de Emergencia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="parent_emer">Parentezco</label>
                                <input type="text" class="form-control" id="parent_emer" name="parent_emer" required
                                    value="{{ $alumno->parent_emer }}" placeholder="Parentezco con la persona">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cel_emer">Celular</label>
                                <input type="number" class="form-control" id="cel_emer" name="cel_emer" required
                                    value="{{ $alumno->cel_emer }}" placeholder="Celular del Contacto de Emergencia">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="puesto_work">Puesto de trabajo</label>
                                <input type="text" class="form-control" id="puesto_work" name="puesto_work"
                                    value="{{ $alumno->puesto_work }}" placeholder="Puesto de trabajo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="est_civil">Estado Civil</label>
                                <input type="text" class="form-control" id="est_civil" name="est_civil"
                                    value="{{ $alumno->est_civil }}" placeholder="Puesto de trabajo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nro_carga_fam">Carga Familiar</label>
                                <input type="text" class="form-control" id="nro_carga_fam" name="nro_carga_fam"
                                    value="{{ $alumno->nro_carga_fam }}" placeholder="Carga Familiar">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="net_en_casa">¿Cuenta con Internet en Casa?</label>
                                <input type="text" class="form-control" id="net_en_casa" name="net_en_casa" required
                                    value="{{ $alumno->net_en_casa }}" placeholder="¿Cuenta con Internet en Casa?">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="equipo_tec">Equipo con el que Cuenta</label>
                                <input type="text" class="form-control" id="equipo_tec" name="equipo_tec"
                                    value="{{ $alumno->equipo_tec }}" placeholder="Equipo con el que Cuenta">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="discapacidad">Sufre Alguna Discapacidad?</label>
                                <input type="text" class="form-control" id="discapacidad" name="discapacidad"
                                    value="{{ $alumno->discapacidad }}" placeholder="Sufre Alguna Discapacidad?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="religion">Religión</label>
                                <input type="text" class="form-control" id="religion" name="religion"
                                    value="{{ $alumno->religion }}" placeholder="Religión">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lengua_mater">Lengua Materna</label>
                                <input type="text" class="form-control" id="lengua_mater" name="lengua_mater"
                                    value="{{ $alumno->lengua_mater }}" placeholder="Lengua Materna">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cetpro_id">CETPRO</label>
                                <select id="cetpro_id" name="cetpro_id" required class="form-control">
                                    @foreach ($cetpros as $cetpro)
                                        @if ($cetpro->id == $alumno->cetpro_id)
                                            {
                                            <option value="{{ $cetpro->id }}" selected class="text-muted">
                                                {{ $cetpro->name_cetpro }}</option>
                                            }
                                        @else
                                            <option value="{{ $cetpro->id }}" class="text-muted">
                                                {{ $cetpro->name_cetpro }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="anio_academi">Año academico</label>
                                <input type="date" class="form-control" id="anio_academi" name="anio_academi"
                                    required value="{{ $alumno->anio_academi }}" placeholder="Año academico">
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label for="prog_estudio">Programa de estudio</label>
                                <input type="text" class="form-control" id="prog_estudio" name="prog_estudio"
                                    required value="{{ $alumno->prog_estudio }}" placeholder="Programa de estudio">
                            </div> --}}
                            <div class="form-group col-md-4">
                                <label for="programa_estudio_id">Programa de estudio</label>
                                <select id="programa_estudio_id" name="programa_estudio_id" required
                                    class="form-control">
                                    @foreach ($programas as $programa)
                                        @if ($programa->id == $alumno->cetpro_id)
                                            {
                                            <option value="{{ $programa->id }}" selected class="text-muted">
                                                {{ $programa->nombre }}</option>
                                            }
                                        @else
                                            <option value="{{ $programa->id }}" class="text-muted">
                                                {{ $programa->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="code_inscrip">Código de inscripción</label>
                                <input type="text" class="form-control" id="code_inscrip" name="code_inscrip"
                                    required value="{{ $alumno->code_inscrip }}" placeholder="Código de inscripción">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="expects">Expectativas</label>
                                <textarea class="form-control" id="expects" name="expects" rows="3" placeholder="Expectativas">{{ $alumno->expects }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            {{-- <div class="form-group col-md-4">
                                <label for="marketing_id">Medio</label>
                                <input type="text" class="form-control" id="marketing_id" name="marketing_id" required
                                    placeholder="Medio por el cual se enteró">
                            </div> --}}
                            <div class="form-group col-md-4">
                                <label for="marketing_id">Programa de estudio</label>
                                <select id="marketing_id" name="marketing_id" required class="form-control">
                                    @foreach ($marketings as $marketing)
                                        @if ($marketing->id == $alumno->cetpro_id)
                                            {
                                            <option value="{{ $marketing->id }}" selected class="text-muted">
                                                {{ $marketing->medio }}</option>
                                            }
                                        @else
                                            <option value="{{ $marketing->id }}" class="text-muted">
                                                {{ $marketing->medio }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" id="btn-submit">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let btn = document.getElementById('btn-submit');
            let regex = /^[A-Za-z\s]+$/;

            btn.addEventListener('click', (event) => {

                let tel_fijo = document.getElementById('tel_fijo').value;

                let numeros = ['DNI', 'cel_propio', 'cel_emer'];
                let campos_numeros = ['DNI', 'CELULAR PROPIO', 'CELULAR EMERGENCIA']
                let cont = 0;
                for (const campo of numeros) {
                    let validar = document.getElementById(campo).value;
                    if (validar.length != 8) {
                        alertError(`El ${campos_numeros[cont]} debe tener 8 dígitos`, 'error');
                        break;
                    }
                    cont += 1;
                }

                let letras = ['pais', 'lu_nacimi', 'ditri_nacimi', 'provi_nacimi', 'regi_nacimi']
                let campos_letras = ['PAÍS', 'LUGAR DE NACMIENTO', 'DISTRITO DE NACIMIENTO',
                    'PROVINCIA DE NACIMIENTO', 'REGIÓN DE NACIMIENTO',
                ]
                cont = 0;
                for (const campo of letras) {
                    let validar = document.getElementById(campo).value;
                    if (!regex.test(validar)) {
                        alertError(`${campos_letras[cont]} debe contener solo letras`, 'error');
                        console.log(cont);
                    }
                    cont += 1;
                }

                if (tel_fijo.length != 10) {
                    alertError('El TELEFONO FIJO debe tener 10 dígitos')
                }
            });
        });
    </script>
@endsection
