@extends('Plantilla.pprofesor')
<br>

@section('content')
	<div class="container contenidoP">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Actualizar nota </h3> 
					@foreach ($existe as $existe)
					@endforeach
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-11">
					@include('Profesor.form.actualizarnota')
				</div>
			</div>
			<hr>
		</div>
	</div>
@endsection