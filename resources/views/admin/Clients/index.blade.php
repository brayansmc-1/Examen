@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
	<a href="{{ route('Clients.create') }}" class="btn btn-info">Registrar nuevo Cliente</a><br>
	<br>
	<!-- Buscador de procesos}} -->
 			{!!Form::open(['route'=>'Clients.index','method'=>'GET','class'=> 'navbar -form pull-rigth']) !!}
 			<div class="input-group">
 				{!! Form::text('name', null,['class'  => 'form-control','placeholder' =>'Buscar Cliente...', 'aria-describedby'=>'search']) !!}
 				<span class ="input-group-addon" id="search"><span class="glyphicon glyphicon-search"  aria-hidden="true"></span></span>
			</div>
			{!!Form::close() !!}
	<!-- FIN BUSCDE -->

	<TABLE class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Dirección</th>
			<th>Role</th>
			<th>Acción</th>
		</thead>
		<tbody>
			<h3 class="panel-title">@yield('title')</h3>
			@foreach($Clients as $Client)
				<tr>
					<td>{{ $Client->id }}  </td>
					<td>{{ $Client->name }} </td>
					<td>{{ $Client->email }} </td>
					<td>{{ $Client->direccion }} </td>
					@if($Client->role == 'client' )
					<td class="text text-success"> Cliente </td>
					@else
					<td class="text text-danger">Sin asignar</td>
					@endif

							<td width="10px">
							<a href="{{ route('Clients.edit', $Client->id) }}" class="btn btn-warning">Editar</a>
							</td>
							<td width="10px">
							{!! Form::open (['route' => ['Clients.destroy', $Client -> id],'method' =>'DELETE'])!!}
              				<button class="btn btn-danger "onclick="return confirm('¿Seguro que desea eliminar el Cliente? ')"> Eliminar</button>
            				{!!Form::close()!!}
							</td>
							<td width="10px">
							<a href="{{ route('Clients.show', $Client->id) }}" class="btn btn-primary">Ver</a>
							</td>		
				</tr>	
			@endforeach		
		</tbody>
	</TABLE>
	<div class="text.center">
	    {!! $Clients->render()  !!}
    </div>
@endsection
