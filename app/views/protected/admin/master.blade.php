<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title') - Radec S.A de C.V - </title>
	<meta name="description" content="">
	<meta name="author" content="">
		{{ HTML::style('assets/css/style.css')}}
		{{ HTML::style('assets/css/bootstrap.css')}}
    {{ HTML::script('assets/js/jquery-ui.min.js')}}
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	    {{ HTML::script('assets/js/bootstrap.min.js')}}
	    {{ HTML::script('assets/js/jquery.js')}}
	    {{ HTML::script('assets/js/jquery-ui.js')}}
	    {{ HTML::script('assets/js/dataTables.js')}}

		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-inverse" role="navigation">
		  <div class="container-fluid">
		  	<div class="col-md-2">
			    <div class="container">
						<div class="row clearfix">
							<div class="col-md-12 column">
								<div class="row clearfix">
									<div class="col-md-3 column">
										{{ HTML::image('images/radec_logo.jpg', "Imagen no encontrada", array('id' => 'radec_logo', 'title' => 'RADEC S.A de C.V')) }}
									</div>
									<div class="col-md-9 column">
									<div class="navbar-header">
							      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
			  </div>
			  <div class="col-md-10">
			    <div class="collapse navbar-collapse nav navbar-nav navbar-right">
			      <ul class="nav navbar-nav">
			        <li class="{{ set_active('/') }}"><a href="/">Inicio</a></li>
			      	@if (!Sentry::check())
							@else
								<li class="{{ set_active_admin('admin/profiles') }}"><a href="/admin/profiles">Usuarios</a></li>
								<li class="{{ set_active_admin('admin/departments') }}"><a href="/admin/departments/">Departamentos</a></li>
								<li class="{{ set_active_admin('admin/cellphones') }}"><a href="/admin/cellphones/">Celulares</a></li>
								<li class="{{ set_active_admin('admin/type_costs') }}"><a href="/admin/type_costs/">Control de Gasto</a></li>
								<li class="{{ set_active_admin('admin/cost_centers') }}"><a href="/admin/cost_centers/">Centro de Costo</a></li>
								<li><a href="/logout">Cerrar Sesion</a></li>
							@endif
			      </ul>
			    </div>
			  </div>
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>