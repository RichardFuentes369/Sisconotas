@extends('Plantilla.palumno')
<br>
@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Grado</h3>
					@foreach ($consulta as $consul)
					@endforeach
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					@include('Alumno.table.tabla-grados')
				</div>
				<div class="col-sm-3"></div>
			</div>
			<hr>
			<br>
		</div>
	</div>
@endsection