@extends('Plantilla.palumno')
<br>
@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Notas de {{ $nombre_materia }}</h3>
					@foreach ($consultanotas as $consul)
					@endforeach
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					@include('Alumno.table.tabla-vernota')
				</div>
				<div class="col-sm-2"></div>
			</div>
			<hr>
			<br>
		</div>
	</div>
@endsection
