@extends ('admin/layout')

<?php

    if ($bookmark->exists):
        $form_data = array('route' => array('admin.bookmarks.update', $bookmark->id), 'method' => 'PATCH');
        $action    = 'Editar';
    else:
        $form_data = array('route' => 'admin.bookmarks.store', 'method' => 'POST');
        $action    = 'Crear';        
    endif;

?>

@section ('title') {{ $action }} Bookmark @stop

@section ('content')

  <h1>{{ $action }} Bookmark</h1>

{{-- Destroy Bookmark--}}

{{ Form::model($bookmark, $form_data, array('role' => 'form')) }}

  @include ('admin/errors', array('errors' => $errors))

  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('desc', 'URL') }}
      {{ Form::text('desc', null, array('placeholder' => 'Introduce la Url', 'class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('idcat', 'Categoria') }}
      {{ Form::text('idcat', null, array('class' => 'form-control')) }}        
    </div>
  </div>

  {{ Form::hidden('iduser', $iduser) }}
  {{ Form::button($action . ' bookmark', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
  
{{ Form::close() }}

@stop