@extends('Plantilla.padministrador')
<br>
@section('content')
	<div class="container contenidoA">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Actualizar Rector</h3>
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
					@include('Administrador.form.actualizarrector')
				</div>
			</div>
			<hr>
			<form action="{{ url('administrador')}}/{{'rectoresl'}}" method="Get">
				<button class="btn btn-link btn-sm" title="Volver">
					<i class="material-icons">undo</i>
				</button>
			</form>
			<br>
		</div>
	</div>
@endsection