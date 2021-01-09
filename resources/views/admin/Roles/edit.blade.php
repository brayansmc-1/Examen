@extends('admin.template.main')

@section('title','Editar Rol')

@section('content')


        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="table table-striped mb-3">@yield('title')</h3>
                <div class="panel-body">
                     {!! Form::model($role, ['route' => ['roles.update', $role->id],
                     'method' => 'PUT']) !!}

                        	@include('admin.roles.partials.form')
                
                    	{!! Form::close() !!}
                </div>
            </div>
        </div>

@endsection