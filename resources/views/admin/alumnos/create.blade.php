@extends('layouts.app', ['pageSlug' => 'alumnos'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.alumnos.index') }}" method="POST">
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
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="regi_nacimi">Región de Nacimiento</label>
                                <input type="text" class="form-control" id="regi_nacimi" name="regi_nacimi" required
                                    placeholder="Región de Nacimiento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="direc_actual">Dirección Actual</label>
                                <input type="text" class="form-control" id="direc_actual" name="direc_actual" required
                                    placeholder="Dirección Actual">
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
                                <label for="aa_nn_emer">Apellidos y Nombres</label>
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
                                <label for="nro_carga_fam">Gargo Familiar</label>
                                <input type="text" class="form-control" id="nro_carga_fam" name="nro_carga_fam"
                                    placeholder="Gargo Familiar">
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
                                <label for="anio_academi">Año academico</label>
                                <input type="date" class="form-control" id="anio_academi" name="anio_academi"
                                    required placeholder="Año academico">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="programa_estudio_id">Programa de estudio</label>
                                <select id="programa_estudio_id" name="programa_estudio_id" required
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
        document.addEventListener('DOMContentLoaded', function() {
            let btn = document.getElementById('btn-submit');
            let camposValidar = ['DNI', 'pais', 'lu_nacimi', 'ditri_nacimi', 'provi_nacimi', 'regi_nacimi',
                'tel_fijo', 'cel_propio', 'cel_emer'
            ];
            let regex = /^[A-Za-z\s]+$/;

            btn.addEventListener('click', (event) => {
                camposValidar.forEach(campo => {
                    let valorCampo = document.getElementById(campo).value;

                    if (campo === 'DNI' && valorCampo.length !== 8) {
                        alertError(`El ${campo} debe tener 8 dígitos`);
                        event.preventDefault();
                    } else if ((campo === 'tel_fijo' || campo === 'cel_propio' || campo === 'cel_emer') && valorCampo.length !== 9) {
                        alertError(`El ${campo} debe tener 9 dígitos`);
                        event.preventDefault();
                    } else if (!regex.test(valorCampo)) {
                        alertError(`El ${campo} debe contener solo letras y espacios.`);
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection
