@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container contenidoS">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Actualizar Profesor</h3>
					engargado del grupo
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
					@include('Secretario.form.actualizarprofesorencargado')
				</div>
			</div>
			<br>
		</div>
	</div>
@endsection