@extends('admin.template.main')

@section('title','Lista Usuarios')
    
@section('content')

    {!! Form::open(['route' => ['Clients.show', $Client],'method' => 'Get']) !!}

        <div class="form-group">
            {!! Form::label('name','Nombre:') !!}
            {!! Form::text('name', $Client->name,['class'=>'form-control','placeholder' => 'Nombre Completo','disabled']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Correo Electronico:') !!}
            {!! Form::email('email',$Client->email,['class'=>'form-control','placeholder' => 'Ejemplo nombre@gmail.com','disabled']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('direccion','Dirección:') !!}
            {!! Form::text('direccion',$Client->direccion,['class'=>'form-control','placeholder' => 'Sin dirección','disabled']) !!}
        </div>
        <div class="form-group">
      
        </div>	
       	


        <div class="form-group">
              <a href="{{ route('Clients.index') }}" class="btn btn-primary">Regresar</a>
        </div>  

    {!! Form::close() !!}

@endsection