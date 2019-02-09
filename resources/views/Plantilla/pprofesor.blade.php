<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
	<title>@yield('title')</title>
	{{ Html::style('css/index.css') }}
  </head>
  <body class="background">

  	<div class="header subir">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <h3><a href="{{ url('profesor')}}/{{ 'bienvenido' }}"><i class="fonttitle">Sisconotas</i></a></h3>
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
							<div class="container">
								<div class="col-sm-1"></div>
								<div class="menu">
									<br>
									<h4>Menú Profesores</h4>
									<h5>{{ Auth::user()->email }}</h5>
									<h5>{{ Auth::user()->colegios->razon_social }}</h5>
									<hr>
									<form action="{{ url('profesor')}}/{{ 'alumnosl' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti">
											<i class="material-icons">supervisor_account</i> Alumnos
										</button>
									</form>
									<form action="{{ url('profesor')}}/{{ 'listarAN' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti subir2">
											<i class="material-icons">spellcheck</i> Notas
										</button>
									</form>
									<hr>
					        		<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6">
												{!! Form::open(['url' => 'profesor/ajustes', 'method'=>'GET'])!!}
													{{ Form::submit('settings',array('class'=>'btn btn-secondary btn-block material-icons', 'title'=>'Ajustes')) }}
												{!! Form::close() !!}
											</div>
											<div class="col-sm-6">
								        		{!! Form::open(['url' => 'Logout']) !!}
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>