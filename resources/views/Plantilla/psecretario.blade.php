<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
	{{ Html::style('css/index.css') }}
  </head>
  <body class="background">

  	<div class="header subir">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <h3><a href="{{ url('secretario')}}/{{ 'bienvenido' }}"><i class="fonttitle">Sisconotas</i></a></h3>
		</nav>
	</div>

	<div class="body">
		<br>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-3">
					<div class="col-sm-12">
						<br>
						<div class="card">
							<div class="containe">
								<div class="col-sm-1"></div>
								<div class="col-sm 2">
									<br>
									<h4>Menú Secretarias</h4>
									<h5>{{ Auth::user()->email }}</h5>
									<h5>{{ Auth::user()->colegios->razon_social }}</h5>
									<hr>
									<form action="{{ url('secretario')}}/{{ 'profesoresl' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti">
											<i class="material-icons">supervisor_account</i> Profesores
										</button>
									</form>
									<form action="{{ url('secretario')}}/{{ 'alumnosl' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti subir2">
											<i class="material-icons">supervisor_account</i> Alumnos
										</button>
									</form>
									<form action="{{ url('secretario')}}/{{ 'anhosl' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti subir2">
											<i class="material-icons">calendar_today</i> Años
										</button>
									</form>	
									<form action="{{ url('secretario')}}/{{ 'materiasl' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti subir2">
											<i class="material-icons">list</i> Materias
										</button>
									</form>
									<hr>
					        		<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6">
												{!! Form::open(['url' => 'secretario/ajustes', 'method'=>'GET'])!!}
													{{ Form::submit('settings',array('class'=>'btn btn-secondary btn-block material-icons', 'title'=>'Ajustes')) }}
												{!! Form::close() !!}
											</div>
											<div class="col-sm-6">
								        		{!! Form::open(['url' => 'index/Logout']) !!}
													{{ csrf_field() }}
														{{ Form::submit('power_settings_new',array('class'=>'btn btn-secondary btn-block material-icons', 'title'=>'Salir')) }}
												{!! Form::close() !!}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				<div class="col-sm-9">
					<br>						
					<div class="card">
						@yield('content')
					</div>	
					<br>		
				</div>
			</div>
		</div>
	</div>
	
	<br>
	
	<div class="footer bg-light">
		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">Ingeniero Javier Ricardo Baron Fuentes <br> © 2019 
		  </div>
		  <!-- Copyright -->
	</div>
        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  </body>
</html>