@extends('Plantilla.padministrador')

@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Colegio</h3>
					@foreach ($existe as $existe)
						NIT {{ $existe->nit }}
					@endforeach
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-11">
					@include('Administrador.form.vercolegio')
				</div>
			</div>
			<hr>
			<form action="{{ url('administrador')}}/{{'colegiosl'}}" method="Get">
				<button class="btn btn-link btn-sm">
					<i class="material-icons">undo</i>
				</button>
			</form>
			<br>
		</div>
	</div>
@endsection
