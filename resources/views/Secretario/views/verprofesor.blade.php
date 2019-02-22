@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container contenidoS">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Profesor</h3>
					@foreach ($existe as $existe)
						dni: {{ $existe->dni }} 
					@endforeach
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-11">
					@include('Secretario.form.verprofesor')
				</div>
			</div>
			<hr>
			<form action="{{ url('secretario')}}/{{'profesoresl'}}" method="Get">
				<button class="btn btn-link btn-sm" title="Volver">
					<i class="material-icons">undo</i>
				</button>
			</form>
			<br>
		</div>
	</div>
@endsection