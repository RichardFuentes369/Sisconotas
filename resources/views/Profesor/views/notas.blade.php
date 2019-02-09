@extends('Plantilla.pprofesor')
<br>
@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<br>
					<h3>Notas del alumno {{ $dni }} </h3>
					registradas en el sistema
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					@include('Profesor.table.tabla-materias')
				</div>		
				<div class="col-sm-4"></div>		
			</div>
		</div>
	</div>
@endsection


