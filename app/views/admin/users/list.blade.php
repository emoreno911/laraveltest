@extends ('admin/layout')

@section ('title') Lista de Usuarios @stop

@section ('content')

  <h1>Lista de usuarios</h1>

  <table class="table table-striped">
    <tr>
        <th>Full name</th>
        <th>Email</th>
        <th></th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        	<a href="{{ route('admin.users.show', array($user->id)) }}" class="btn btn-info btn-xs">Ver</a>
        	<a href="{{ route('admin.users.edit', array($user->id)) }}" class="btn btn-primary btn-xs">Editar</a>
        	<a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete btn-xs">Eliminar</a>
        </td>
    </tr>
    @endforeach
  </table>

  {{ $users->links() }}

  <p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
  </p>


  {{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
  {{ Form::close() }}

@stop