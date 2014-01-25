@extends ('admin/layout')

@section ('title') Lista de Usuarios @stop

@section ('content')

  <div class="bs-callout bs-callout-info">
    <h1>Bookmarks</h1>
  </div>
  
  <h2>Lista de usuarios <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">Crear un nuevo usuario</a></h2>

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
        	<a href="{{ action('DashController@userDetail', array($user->id)) }}" class="btn btn-info btn-xs">Ver</a>
        	<a href="{{ route('admin.users.edit', array($user->id)) }}" class="btn btn-primary btn-xs">Editar</a>
        	<a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete btn-xs">Eliminar</a>
        </td>
    </tr>
    @endforeach
  </table>

  <p>&nbsp;</p>

  <h2>Categorias</h2>
  <table class="table table-striped">
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->desc }}</td>
        <td>
          <a href="#" class="btn btn-info btn-xs">Ver</a>
        </td>
    </tr>
    @endforeach
  </table>

@stop