@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
 

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarme</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="label">E-Mail Address</label>
                                    <div >
                                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                            
                        <div class="group">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="label">Password</label>
                                    <div >
                                        <input id="password" type="password" class="input" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                <label for="role" class="label">tipo</label>
                                    <div>
                                        <select id="role" type="role" class="input" name="role" value="role">
                                            {<option class="text-dark" value="admin">Admin</option>
                                            <option class="text-dark" value="Vendedor">vendedor</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input class="icon" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme
                                    </label>
                                </div>
                            </div>   
                        </div>
                        
                        <div class="group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="button">
                                    Iniciar
                                </button> 
                            </div>
                        </div>
                        
                        <div class="hr"></div>
                        
                        <div class="foot-lnk">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Olvide la contraseña
                            </a>
                        </div>
                 </form>
                </div>
                
                <!-- registro -->
			<div class="sign-up-htm">
                <form  method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                    <div class="group">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="label">Nombre</label>
                                <div>
                                    <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                       <strong>{{ $errors->first('name') }}</strong> 
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                        
                    <div class="group">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="label">E-Mail</label>
                                <div>
                                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label">Contraseña</label>
                                <div>
                                    <input id="password" type="password" class="input" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="form-group">
                            <label for="password-confirm" class="label">Confirma Contraseña</label>
                            <div>
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="button">
                                     Register
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
		</div>
	</div>
</div>


</body>
@endsection