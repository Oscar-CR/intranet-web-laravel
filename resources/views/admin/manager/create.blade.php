@extends('layouts.app')

@section('content')
    <div class="card-header">
        <h3>Asignar Manager</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['route' => 'admin.manager.store']) !!}
        <div class="row ">
            <div class="col-4">
                {!! Form::label('department_id', 'Departamento') !!}
                {!! Form::select('department_id', $departments, null, ['class' => 'form-control', 'placeholder' => 'Selecciona Departamento']) !!}
                @error('department_id')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>

            <div class="col-4">
                {!! Form::label('position', 'Puesto actual') !!}
                {!! Form::select('position', $positions, null, ['class' => 'form-control', 'placeholder' => 'Selecciona un Puesto']) !!}
                @error('position')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>

            <div class="col-4">
                {!! Form::label('employee_id', 'Nombre del Empleado') !!}
                {!! Form::select('employee_id', $employees, null, ['class' => 'form-control', 'placeholder' => 'Selecciona un Empleado']) !!}
                @error('employee_id')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>
            {!! Form::submit('ASIGNAR COMO MANAGER', ['class' => 'btnCreate mt-4']) !!}
        </div>
        {!! Form::close() !!}
    </div>


@stop

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('select[name="department_id"]').on('change', function() {
                var id = jQuery(this).val();
                if (id) {
                    jQuery.ajax({
                        url: '/manager/getPosition/' + id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            jQuery('select[name="position"]').empty();
                            jQuery.each(data, function(key, value) {
                                $('select[name="position"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="position"]').empty();
                }
            });
        });
    </script>


    <script type="text/javascript">
        // jQuery(document).ready(function() {
        //     jQuery('select[name="position"]').on('change', function() {
        //         var id = jQuery(this).val();
        //         if (id) {
        //             jQuery.ajax({
        //                 url: '/manager/getEmployee/' + id,
        //                 type: "GET",
        //                 dataType: "json",
        //                 success: function(data) {
        //                     console.log(data);
        //                     jQuery('select[name="employee_id"]').empty();
        //                     jQuery.each(data, function(key, value) {
        //                         $('select[name="employee_id"]').append(
        //                             '<option value="' + key + '">' + value +
        //                             '</option>');
        //                     });
        //                 }
        //             });
        //         } else {
        //             $('select[name="employee_id"]').empty();
        //         }
        //     });
        // });
    </script>
@stop
