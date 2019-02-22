@extends('Plantilla.padministrador')
<br>
@section('content')
	<div class="container contenidoA">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Actualizar Porcentaje</h3>					
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
					@include('Administrador.form.actualizarporcentaje')
				</div>
			</div>
			<hr>
			<form action="{{ url('administrador')}}/{{'porcentajesl'}}" method="Get">
				<button class="btn btn-link btn-sm" title="Volver">
					<i class="material-icons">undo</i>
				</button>
			</form>
			<br>
		</div>
	</div>
@endsection