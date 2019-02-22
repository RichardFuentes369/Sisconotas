@extends('Plantilla.padministrador')
<br>
@section('content')
	<div class="container contenidoA">
		<br>
		<h3>Ajustes</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
				@include('Administrador.form.ajustes')
			</div>
		</div>
	</div>
@endsection