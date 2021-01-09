@extends('admin.template.main')

@section('title','Editar Usuario')

@section('content')

<a href="{{ route ('Users.index') }}" class="btn btn-primary float-right ">Regresar</a>
<br>
	{!! Form::open(['route' => ['Users.update', $user] ,'method' => 'PUT']) !!}	

			<div class="form-group">
				{!! Form::label('name','Nombre:') !!}
				{!! Form::text('name', $user->name,['class'=>'form-control','required']) !!}
			</div>
  
 			 <div class="form-group">
				{!! Form::label('email','Correo Electronico:') !!}
				{!! Form::email('email',$user->email,['class'=>'form-control','required']) !!}
			</div>

			 
			<div class="form-group">
				{!! Form::label('type','Tipo:') !!}
				{!! Form::select('user_id',$role,$user->roles,['class' => 'form-control']) !!}
				
			</div>	


					
			@can('Users.edit')
			<h3>Lista de permisos</h3>
			<div class="form-group">
				<ul class="list-unstyled">
					@foreach($permissions as $permission)
					<div class="form-check">
						<label class="form-check-label" for="permissions[{{ $permission->id }}]"> 
							<input type="checkbox" value="{{ $permission->id }}"
							name="permissions[]" id="permissions[{{ $permission->id }}]"
							class="form-check-input"
							@if(isset($asignar)){{in_array($permission->id,$asignar) ? 'checked':''}}@endif
							>{{ $permission->name }}
							<em>({{ $permission->description ? : 'Sin descripción' }})</em>
						</label>
					</div>
					@endforeach
				</ul>
			</div> 
			 
			<!--  <div class="form-group">
				<ul class="list-unstyled">
					@foreach($permissions as $permission)
					<li>
						<label>
						{{ Form::checkbox('permissos[]',$permission->id, null, ['id' => 'permissions']) }}
						{{ $permission->name }}
						<em>({{ $permission->description }})</em>
						</label>
					</li>
					@endforeach
				</ul>
			</div>
 		   -->
			@endcan

			<div class="form-group">  
				{!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}	
				 
			</div>
			
	{!! Form::close() !!}


@endsection