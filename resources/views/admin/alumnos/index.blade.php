@extends('layouts.app', ['pageSlug' => 'alumnos'])

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

@if (session('info'))
    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>
    <script>
        alertError('{{ session('info') }}', 'success');
    </script>
@endif

    <style>
        /* Estilo básico del botón y las opciones */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

    </style>

    <div class="row">
        <div class="card">
            <div class="d-flex justify-content-between">
                <h4 class="d-flex align-items-center ml-4">Alumnos</h4>
                <a href="{{ route('admin.alumnos.create') }}"><button class="btn btn-info animation-on-hover d-flex mr-4"
                        type="button">Crear </button></a>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Lista de alumnos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="alumnos">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>N° Celular</th>
                                    <th>Año Académico</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->full_name }}</td>
                                        <td>{{ $alumno->ape_pater }}</td>
                                        <td>{{ $alumno->ape_mater }}</td>
                                        <td>{{ $alumno->cel_propio }}</td>
                                        <td>{{ $alumno->anio_academi }}</td>
                                        <td width="10px">
                                            <a class="btn btn-success btn-sm" href="{{ route('admin.alumnos.edit', $alumno) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            <a class="btn btn-info btn-sm" target="_blank" href="{{ route('admin.alumnos.show', $alumno) }}">PDF</a>
                                        </td>
                                        <td width="10px">
                                            <form action="{{ route('admin.alumnos.destroy', $alumno) }}" method="POST" id="form-delete">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-danger btn-sm btn-delete" data-alumno-id="{{ $alumno->id }}">Eliminar</button>
                                            </form>
                                        </td>
                                        <td width="10px">
                                            <div class="dropdown">
                                                <button class="dropdown-button" onclick="toggleDropdown()">Documentos</button>
                                                <div id="dropdownContent" class="dropdown-content">
                                                <a href="{{ route('admin.alumnos.show', ['alumno' => $alumno, 'pdfType' => 'pdf']) }}" target="_blank">PDF</a>
                                                <a href="{{ route('admin.alumnos.show', ['alumno' => $alumno, 'pdfType' => 'pdfx']) }}" target="_blank">Opción 2</a>
                                                <a href="#">Opción 3</a>
                                                <!-- Puedes agregar más opciones según sea necesario -->
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        @section('js')
                        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
                        <script>new DataTable('#alumnos');</script>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin') }}/alerts/alert-error.js"></script>

    <script>
        document.querySelectorAll('.btn-delete').forEach((button) => {
            button.addEventListener('click', function() {
                const form = this.closest('form');
                confirmDelete(form);
            });
        });




        // 1 DESPLEGAR POR ID LOS ALUMNOS
        document.addEventListener("DOMContentLoaded", function () {
            // Obtén todos los botones y contenidos de los menús desplegables
            var dropdownButtons = document.querySelectorAll(".dropdown-button");

        // 1.1 Itera sobre cada botón
        dropdownButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                // Encuentra el contenido del menú desplegable asociado a este botón
                var dropdownContent = this.nextElementSibling;

                // Alterna la visibilidad del contenido
                dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
            });
        });

        // 1.2 Cierra el menú si se hace clic fuera de él
        document.addEventListener("mouseup", function (e) {
            dropdownButtons.forEach(function (button) {
                var dropdownContent = button.nextElementSibling;

                if (!button.contains(e.target) && !dropdownContent.contains(e.target)) {
                    dropdownContent.style.display = "none";
                }   
            });
        });
    });


    </script>
@endsection
