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
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="regi_nacimi">Región de Nacimiento</label>
                                <input type="text" class="form-control" id="regi_nacimi" name="regi_nacimi" required
                                    value="{{ $alumno->regi_nacimi }}" placeholder="Región de Nacimiento">
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
                                <label for="aa_nn_emer">Apellidos y Nombres</label>
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
                                <label for="nro_carga_fam">Gargo Familiar</label>
                                <input type="text" class="form-control" id="nro_carga_fam" name="nro_carga_fam"
                                    value="{{ $alumno->nro_carga_fam }}" placeholder="Gargo Familiar">
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
                            <div class="form-group col-md-4">
                                <label for="prog_estudio">Programa de estudio</label>
                                <input type="text" class="form-control" id="prog_estudio" name="prog_estudio"
                                    required value="{{ $alumno->prog_estudio }}" placeholder="Programa de estudio">
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
                                <textarea class="form-control" id="expects" name="expects" rows="3"
                                    placeholder="Expectativas">{{ $alumno->expects }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
