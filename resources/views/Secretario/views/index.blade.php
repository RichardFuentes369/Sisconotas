@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container contenidoS">
		<br>
		<h3>Bienvenido: {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
			</div>
		</div>
	</div>
@endsection