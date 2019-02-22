@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container contenidoS">
		<br>
		<h3>Ajustes</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
				@include('Secretario.form.ajustes')
			</div>
		</div>
	</div>
@endsection