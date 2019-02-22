@extends('Plantilla.palumno')
<br>
@section('content')
	<div class="container contenidoAl">
		<br>
		<h3>Bienvenido: {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</div>
@endsection