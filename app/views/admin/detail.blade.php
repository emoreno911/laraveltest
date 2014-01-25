@extends ('admin/layout')

@section ('title') {{$user->full_name}} @stop

@section ('content')

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Bookmarks {{ $user->full_name }}</h3>
    </div>
    <div class="panel-body">
      Id: {{ $user->id }} <br>
      Email: {{ $user->email }}
    </div>
  </div>

  <p style="text-align:right"><a href="{{ route('admin.bookmarks.create') }}" class="btn btn-primary btn-sm">Nuevo Bookmark</a></p>
  <table class="table table-striped">
    <tr>
        <th>Bookmark</th>
        <th>Category</th>
        <th></th>
    </tr>
    @foreach ($bookmarks as $bookmark)
    <tr>
        <td>{{ $bookmark->desc }}</td>
        <td>{{ $bookmark->cat }}</td>
        <td>
        	<a href="#" class="btn btn-primary btn-xs">Editar</a>
        	<a href="#" class="btn btn-danger btn-delete btn-xs">Eliminar</a>
        </td>
    </tr>
    @endforeach
  </table>

@stop