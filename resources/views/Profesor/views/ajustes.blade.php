@extends('Plantilla.pprofesor')
<br>
@section('content')
	<div class="container contenidoP">
		<br>
		<h3>Ajustes</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
				@include('Profesor.form.ajustes')
			</div>
		</div>
	</div>
@endsection