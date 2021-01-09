@extends('admin.template.main')

@section('title','Crear nuevo Rol')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="table table-striped">Crear nuevo Rol</h3>
                <div class="panel-body">
                     {!! Form::open(['route' => 'roles.store']) !!}

                            @include('admin.roles.partials.form')
                
                        {!! Form::close() !!}
                </div>
            </div>
        </div>

@endsection