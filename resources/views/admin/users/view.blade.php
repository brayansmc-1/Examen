@extends('admin.template.main')

@section('title','Lista Usuarios')
    
@section('content')

    {!! Form::open(['route' => ['Users.show', $user],'method' => 'Get']) !!}

        <div class="form-group">
            {!! Form::label('name','Nombre:') !!}
            {!! Form::text('name', $user->name,['class'=>'form-control','placeholder' => 'Nombre Completo','disabled']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Correo Electronico:') !!}
            {!! Form::email('email',$user->email,['class'=>'form-control','placeholder' => 'Ejemplo nombre@gmail.com','disabled']) !!}
        </div>

        <div class="form-group">
        @if($user->roles == '[]' )
            {!! Form::label('type','Tipo:') !!}
            {!! Form::text('type',null,['class' => 'form-control','placeholder' => 'Sin Rol','disabled']) !!}
            
        @else
            {!! Form::label('role','Tipo:') !!}
            {!! Form::text('role',$user->roles[0]->name ,['class' => 'form-control','placeholder' => 'Tipo de usuario','disabled']) !!}
           
        @endif
        </div>	
       	


        <div class="form-group">
              <a href="{{ route('Users.index') }}" class="btn btn-primary">Regresar</a>
        </div>  

    {!! Form::close() !!}

@endsection