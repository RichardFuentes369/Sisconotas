@extends('Plantilla.psecretario')

@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Materias</h3>
					registradas en el sistema
				</div>
				<div class="col-sm-2">
					<br>
					<button class="btn btn-success">Agregar</button>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					@include('flash::message')
					@include('Secretario.table.tabla-materias')
				</div>	
				<div class="col-sm-2"></div>		
			</div>
		</div>
	</div>
@endsection