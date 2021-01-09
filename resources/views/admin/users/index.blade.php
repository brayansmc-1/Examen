@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
	<a href="{{ route('Users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><br>
	<br>
	<!-- Buscador de procesos}} -->
 			{!!Form::open(['route'=>'Users.index','method'=>'GET','class'=> 'navbar -form pull-rigth']) !!}
 			<div class="input-group">
 				{!! Form::text('name', null,['class'  => 'form-control','placeholder' =>'Buscar Usuarios...', 'aria-describedby'=>'search']) !!}
 				<span class ="input-group-addon" id="search"><span class="glyphicon glyphicon-search"  aria-hidden="true"></span></span>
			</div>
			{!!Form::close() !!}
	<!-- FIN BUSCDE -->

	<TABLE class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Role</th>
			<th>Acción</th>
		</thead>
		<tbody>
			<h3 class="panel-title">@yield('title')</h3>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}  </td>
					<td>{{ $user->name }} </td>
					<td>{{ $user->email }} </td>
					@if($user->roles == '[]' )
					<td class="text text-danger"> Rol no asignado </td>
					@else
					<td> {{ $user->roles[0]->name}} </td>
					@endif

							<td width="10px">
							<a href="{{ route('Users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
							</td>
							<td width="10px">
							{!! Form::open (['route' => ['Users.destroy', $user -> id],'method' =>'DELETE'])!!}
              				<button class="btn btn-danger "onclick="return confirm('¿Seguro que desea eliminar el Rol? ')"> Eliminar</button>
            				{!!Form::close()!!}
							</td>
							<td width="10px">
							<a href="{{ route('Users.show', $user->id) }}" class="btn btn-primary">Ver</a>
							</td>		
				</tr>	
			@endforeach		
		</tbody>
	</TABLE>
	<div class="text.center">
	    {!! $users->render()  !!}
    </div>
@endsection
