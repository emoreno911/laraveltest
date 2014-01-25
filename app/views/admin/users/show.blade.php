@extends ('admin/layout')

@section ('title') {{$user->full_name}} @stop

@section ('content')

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">{{ $user->full_name }}</h3>
    </div>
    <div class="panel-body">
      Id: {{ $user->id }} <br>
      Email: {{ $user->email }}
    </div>
  </div>

@stop