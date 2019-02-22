@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container contenidoS">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Actualizar Profesor</h3>
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
					@include('Secretario.form.actualizarprofesor')
				</div>
			</div>
			<hr>
			<form action="{{ url('secretario')}}/{{'profesoresl'}}" method="Get">
				<button class="btn btn-link btn-sm">
					<i class="material-icons" title="Volver">undo</i>
				</button>
			</form>
			<br>
		</div>
	</div>
@endsection