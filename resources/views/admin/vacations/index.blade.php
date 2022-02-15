@extends('layouts.app')

@section('content')
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Directorio de vacaciones</h3>
            
            <a style="margin-left: 20px;" href=" {{ route('admin.vacations.export') }} " type="button"
                class="btn btn btn-success">Exportar Excel</a>
        </div>
    </div>
    <div class="card-body">


            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%" scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de Ingreso</th>
                            <th style="width: 15%" scope="col">Dias de periodos cumplidos</th>
                            <th style="width: 15%" scope="col">Dias Actuales</th>
                            <th style="width: 15%" scope="col">D.V.</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($vacations as $vacation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vacation->user->name.' '.$vacation->user->lastname }}</td>
                                <td>{{ $vacation->user->employee->date_admission }}</td>
                                <td>
                                    @if ($vacation->period_days==null)
                                        0
                                    @else 
                                    {{$vacation->period_days}}
                                    @endif
                                </td>
                                <td>
                                    @if ($vacation->current_days==null)
                                        0
                                    @else
                                    {{$vacation->current_days}}
                                    @endif
                                </td>
                                <td>
                                    @if ($vacation->dv==null)
                                    0
                                    @else 
                                    {{ $vacation->dv}}
                                    @endif
                                </td>
                                <td class="d-flex flex-wrap">
                                    <a style="width:100px;"
                                        href="{{ route('admin.vacations.edit', ['vacation' => $vacation->id]) }}"
                                        type="button" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $vacations->links() }}
            </div>
        </div>
    </div>
    @stop

    @section('styles')
        <style>
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

        </style>
    @stop


    @section('scripts')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $('.form-delete').submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡El registro se eliminará permanentemente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, eliminar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
            });
        </script>

        {{-- <script>
            function openDepartment(evt, Department) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(Department).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

        <script>
            document.getElementById("defaultOpen").click();
        </script> --}}

    @stop
