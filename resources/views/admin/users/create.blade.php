@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

	

	{!! Form::open(['route' => 'Users.store','method' => 'POST']) !!}	

			<div class="form-group">
				{!! Form::label('name','Nombre:') !!}
				{!! Form::text('name', null,['class'=>'form-control','placeholder' => 'Nombre Completo','required']) !!}
			</div>
  
 			 <div class="form-group">
				{!! Form::label('email','Correo Electronico:') !!}
				{!! Form::email('email',null,['class'=>'form-control','placeholder' => 'Ejemplo nombre@gmail.com','required']) !!}
			</div>

			 <div class="form-group">
				{!! Form::label('password','Password:') !!}
				{!! Form::password('password',['class'=>'form-control','placeholder' => '*********','required']) !!}
			</div>
			

			<div class="form-group">  
				{!! Form::submit('Registrar',['class' => 'btn btn-success']) !!}	
				<a href="{{ route ('Users.index') }}" class="btn btn-primary">Regresar</a>
			</div>

				
			

	{!! Form::close() !!}
@endsection