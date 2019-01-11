@extends('Plantilla.prector')

@section('content')
	<div class="container">
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
					@include('Rector.form.actualizarprofesor')
				</div>
			</div>
			<hr>
			<form action="{{ url('rector')}}/{{'profesoresl'}}" method="Get">
				<button class="btn btn-link btn-sm">
					<i class="material-icons">undo</i>
				</button>
			</form>
			<br>
		</div>
	</div>
@endsection