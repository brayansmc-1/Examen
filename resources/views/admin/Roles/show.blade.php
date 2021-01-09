@extends('admin.template.main')

@section('title','Vista de Rol')

@section('content')

{!! Form::open(['route' => ['roles.show', $role],'method' => 'Get']) !!}
<h3 class="table table-striped">@yield('title')</h3><br>
<div class="form-group">
    {!! Form::label('name','Nombre:') !!}
    {!! Form::text('name', $role->name,['class'=>'form-control','placeholder' => 'No tiene nombre','disabled']) !!}
</div>

<div class="form-group">
    {!! Form::label('Type','Tipo de usuario:') !!}
    {!! Form::email('email',$role->slug,['class'=>'form-control','placeholder' => 'No tiene un tipo especificado','disabled']) !!}
</div>


<div class="form-group">
    {!! Form::label('description','descripcion:') !!}
    {!! Form::text('type',$role->description ,['class' => 'form-control','placeholder' => 'No hay descripción','disabled']) !!}
</div>	

<br>
<div class="form-group">
      <a href="{{ route('roles.index') }}" class="btn btn-primary">Regresar</a>
</div>  

{!! Form::close() !!}

@endsection

