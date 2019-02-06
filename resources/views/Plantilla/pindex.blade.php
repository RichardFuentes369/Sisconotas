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

  	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <h3><a href="{{ url('/')}}/{{ 'index' }}/{{ 'bienvenidos'}}"><i class="fonttitle">Sisconotas</i></a></h3>
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
									<h4>Menú</h4>
									<hr>
									<form action="{{ url('/')}}/{{ 'index' }}/{{ 'login' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti">
											<i class="material-icons">account_circle</i> Ingresar
										</button>
									</form>
									<form action="{{ url('/')}}/{{ 'index' }}/{{ 'mision-vision' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti">
											<i class="material-icons">playlist_add_check</i> Misión/Visión
										</button>
									</form>
									<form action="{{ url('/')}}/{{ 'index' }}/{{ 'sobre-nosotros' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti">
											<i class="material-icons">remove_red_eye</i> Sobre Nosotros
										</button>
									</form>
									<form action="{{ url('/')}}/{{ 'index' }}/{{ 'contactenos' }}" method="Get">
										<button class="btn btn-block btn-outline-success fontGhoti">
											<i class="material-icons">contacts</i> Contactenos
										</button>
									</form>
									<br>
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
	
	<br><br>
	
	<div class="footer bg-light">
		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">Ingeniero Javier Ricardo Baron Fuentes <br> © 2019 
		  </div>
		  <!-- Copyright -->
	</div>

    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>