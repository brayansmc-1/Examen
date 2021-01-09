@extends('admin.template.main')

@section('title','Lista de Roles')

@section('content')

    <a href="{{ route('roles.create') }}" class="btn btn-info">Registrar nuevo Rol</a><br>
    <br>
    <h3 class="table table-striped">@yield('title')</h3>
      <div class="panel-body">
          <table class="table-striped table table-hover">
            <thead>
              <tr>
               <th width="10px">ID</th>
               <th>Nombre</th>
               <th>Acción</th>
              </tr>
            </thead>
            
            <body>
             @foreach($roles as $role)
              <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>

               <td width="10px">
             @can('roles.edit')
             <a href="{{ route('roles.edit', $role ->id)}}" class="btn btn-warning"> Editar </a>
             @endcan

              </td>

              <td width="10px">
             @can('roles.destroy')
            {!! Form::open (['route' => ['roles.destroy', $role -> id],'method' =>'DELETE'])!!}
              <button class="btn btn-danger "onclick="return confirm('¿Seguro que desea eliminar el Rol? ')"> Eliminar</button>
            {!!Form::close()!!}
            @endcan
              </td>

              <td width="10px">
             @can('roles.show')
              <a href="{{ route('roles.show', $role ->id)}}" class="btn btn-primary"> Ver </a>
             @endcan

              </td>
              </tr>
              @endforeach
           </body>
      </table>
      {!! $roles->render()!!}
  </div>
    
@endsection