@extends('Plantilla.pprofesor')
<br>
@section('content')
	<div class="container contenidoP">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<br>
					@foreach ($consultagrado as $consultagrado)
						<h3>Alumnos del grado {{ $consultagrado->nombre }}</h3>
						registrados en el sistema
					@endforeach
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-7">
					@include('Profesor.table.tabla-alumnos')
				</div>	
				<div class="col-sm-2"></div>		
			</div>
		</div>
	</div>
@endsection
