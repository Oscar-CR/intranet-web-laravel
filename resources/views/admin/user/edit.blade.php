@extends('layouts.app')

@section('content')
    <div class="card-header">
        <h3>Editar usuario</h3>
    </div>
    <div class="card-body">
        @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario']) !!}
                @error('name')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('lastname', 'Apellidos') !!}
                {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los apellidos']) !!}
                @error('lastname')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('name', 'Correo') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo de acceso']) !!}
                @error('email')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <div class="mb-2 form-group">
                    {!! Form::label('image', 'Imagen de usuario') !!}
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-md-4">
                {!! Form::label('birthday_date', 'Fecha de Cumplea??os') !!}
                {!! Form::date('birthday_date', $user->employee->birthday_date, ['class' => 'form-control']) !!}
                @error('birthday_date')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('date_admission', 'Fecha de Ingreso') !!}
                {!! Form::date('date_admission', $user->employee->date_admission, ['class' => 'form-control']) !!}
                @error('date_admission')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>

            @php
                $department_id = null;
                $position_id = null;
                if ($user->employee->position) {
                    $department_id = $user->employee->position->department->id;
                    $position_id = $user->employee->position->id;
                }
            @endphp
            <div class="form-group col-md-4">
                {!! Form::label('department', 'Departamento') !!}
                {!! Form::select('department', $departments, $department_id, ['class' => 'form-control', 'placeholder' => 'Selecciona Departamento']) !!}
                @error('department')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('position', 'Puesto') !!}
                {!! Form::select('position', $positions, $position_id, ['class' => 'form-control', 'placeholder' => 'Selecciona Puesto']) !!}
                @error('position')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>

            <div class="form-group col-md-4">
                {!! Form::label('jefe_directo_id', 'Jefe Directo') !!}
                {!! Form::select('jefe_directo_id', $manager, null, ['class' => 'form-control', 'placeholder' => 'Selecciona jefe directo ']) !!}

                @error('jefe_directo_id')
                    <small>
                        <font color="red"> *Este campo es requerido* </font>
                    </small>
                    <br>
                @enderror
            </div>

            <div class="row">

            </div>
            <div class="form-group col-md-4 ">
                {!! Form::label('empresas', 'Empresas a las que pertenece') !!}
                @foreach ($companies as $company)
                    <div>
                        <label>
                            @php
                                $checked = false;
                            @endphp
                            @foreach ($user->employee->companies as $companyUser)
                                @if ($company->id == $companyUser->id)
                                    @php
                                        $checked = true;
                                    @endphp
                                @break
                            @endif

                @endforeach
                {!! Form::checkbox('companies[]', $company->id, $checked, ['class' => 'mr-4']) !!}
                {{ $company->name_company }}
                </label>
            </div>
            @endforeach
            @error('companies')
                <small>
                    <font color="red"> *Este campo es requerido* </font>
                </small>
                <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('roles', 'Roles') !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-4']) !!}
                        {{ $role->display_name }}
                    </label>
                </div>
            @endforeach
            @error('roles')
                <small>
                    <font color="red"> *Este campo es requerido* </font>
                </small>
                <br>
            @enderror
        </div>
    </div>
    {!! Form::submit('ACTUALIZAR USUARIO', ['class' => 'btnCreate mt-4']) !!}
    </div>

    {!! Form::close() !!}
    </div>
@stop

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('select[name="department"]').on('change', function() {
                var id = jQuery(this).val();
                if (id) {
                    jQuery.ajax({
                        url: '/dropdownlist/getPosition/' + id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            jQuery('select[name="position"]').empty();
                            jQuery.each(data.positions, function(key, value) {
                                $('select[name="position"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                            jQuery('select[name="jefe_directo_id"]').empty();
                            jQuery.each(data.users, function(key, value) {
                                $('select[name="jefe_directo_id"]').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="position"]').empty();
                }
            });
        });
    </script>

    {{-- <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('select[name="position"]').on('change', function() {
            var id = jQuery(this).val();
            if (id) {
                jQuery.ajax({
                    url: '/user/getManager/' + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        jQuery('select[name="jefe_directo_id"]').empty();
                        jQuery.each(data, function(key, value) {
                            $('select[name="jefe_directo_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });
                    }
                });
            } else {
                $('select[name="employee_id"]').empty();
            }
        });
    });
</script> --}}
@stop
