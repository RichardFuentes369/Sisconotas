@extends('Plantilla.pprofesor')
<br>
@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<br>
					<h3>Alumnos del grado 10-2</h3>
					registrados en el sistema
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					@include('Profesor.table.tabla-alumnos')
				</div>	
				<div class="col-sm-2"></div>		
			</div>
		</div>
	</div>
@endsection
