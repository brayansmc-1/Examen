<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">		
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body class= "admin-body" id="page-top">
	<!--<div id="content-wrapper" class="d-flex flex-column"> -->

      <!-- Main Content -->
    <!--<div id="content"> -->

    @include('admin.template.partials.nav')

		<!--<section class="section-admin">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">@yield('title')</h3>
				</div> -->
				<!--<div class="panel-body">
				{{-- @include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content') --}}	
				</div>-->	
			<!--</div>
		</section> -->

		
	
		

	<script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>

