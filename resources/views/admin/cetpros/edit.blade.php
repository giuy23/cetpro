@extends('layouts.app', ['pageSlug' => 'cetpros'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.cetpros.update', $cetpro) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name_cetpro">Nombre</label>
                                <input type="text" class="form-control" id="name_cetpro" name="name_cetpro" value="{{$cetpro->name_cetpro}}" required  placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo_gestion">Tipo de Gestión</label>
                                <input type="text" class="form-control" id="tipo_gestion" name="tipo_gestion" value="{{$cetpro->tipo_gestion}}" required
                                    placeholder="Tipo de Gestión">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="resol_autoriza">Resolución de Autorización</label>
                                <input type="text" class="form-control" id="resol_autoriza" name="resol_autoriza" value="{{$cetpro->resol_autoriza}}" required
                                    placeholder="Resolución de Autorización">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{$cetpro->direccion}}" required
                                    placeholder="Dirección">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control" id="lugar" name="lugar" value="{{$cetpro->lugar}}" required
                                    placeholder="Lugar">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="distrito">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" value="{{$cetpro->direccion}}" required
                                    placeholder="Distrito">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="provincia">Provincia</label>
                                <input type="text" class="form-control" id="provincia" name="provincia" value="{{$cetpro->provincia}}" required
                                    placeholder="Provincia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="departamento">Departamento</label>
                                <input type="text" class="form-control" id="departamento" name="departamento" value="{{$cetpro->departamento}}" required
                                    placeholder="Departamento">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="code_modular">Código Modular</label>
                                <input type="text" class="form-control" id="code_modular" name="code_modular" value="{{$cetpro->code_modular}}" required
                                    placeholder="Código Modular">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ugel">Ugel</label>
                                <input type="text" class="form-control" id="ugel" name="ugel" value="{{$cetpro->ugel}}" required
                                    placeholder="Ugel">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="resol_programs">Resolución de Programas</label>
                                <input type="text" class="form-control" id="resol_programs" name="resol_programs" value="{{$cetpro->resol_programs}}" required
                                    placeholder="Resolución de Programas">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nivel_formativo">Nivel Formativo</label>
                                <input type="text" class="form-control" id="nivel_formativo" name="nivel_formativo" value="{{$cetpro->nivel_formativo}}" required
                                    placeholder="Nivel Formativo">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$cetpro->telefono}}" required
                                    placeholder="Teléfono">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="{{$cetpro->celular}}" required
                                    placeholder="Celular">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="correo_inst">Correo Institucional</label>
                                <input type="text" class="form-control" id="correo_inst" name="correo_inst" value="{{$cetpro->correo_inst}}" required
                                    placeholder="Correo Institucional">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="pag_web">Página web</label>
                                <input type="text" class="form-control" id="pag_web" name="pag_web" value="{{$cetpro->pag_web}}"
                                    placeholder="Página web">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
