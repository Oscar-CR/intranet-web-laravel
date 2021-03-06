@extends('layouts.app')

@section('content')
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>Roles</h3>
            <a href="{{ route('admin.roles.create') }}" type="button" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th>{{ $role->id }}</th>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}" type="button"
                                class="btn btn-primary">EDITAR</a>

                            <form class="form-delete" action="{{ route('admin.roles.destroy', ['role' => $role->id]) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">BORRAR</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
@stop
