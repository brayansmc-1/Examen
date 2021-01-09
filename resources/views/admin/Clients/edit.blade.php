@extends('admin.template.main')

@section('title','Editar Usuario')

@section('content')

<a href="{{ route ('Clients.index') }}" class="btn btn-primary float-right ">Regresar</a>
<br>
	{!! Form::open(['route' => ['Clients.update', $Client] ,'method' => 'PUT']) !!}	

			<div class="form-group">
				{!! Form::label('name','Nombre:') !!}
				{!! Form::text('name', $Client->name,['class'=>'form-control','required']) !!}
			</div>
  
 			<div class="form-group">
				{!! Form::label('email','Correo Electronico:') !!}
				{!! Form::email('email',$Client->email,['class'=>'form-control','required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('direccion','Dirección:') !!}
				{!! Form::text('direccion',$Client->direccion,['class'=>'form-control','required']) !!}
			</div>
			

			<div class="form-group">  
				{!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}	
				 
			</div>
			
	{!! Form::close() !!}


@endsection