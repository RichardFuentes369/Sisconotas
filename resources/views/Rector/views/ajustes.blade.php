@extends('Plantilla.prector')
<br>
@section('content')
	<div class="container">
		<br>
		<h3>Ajustes</h3>
		<hr>
		<div class="col-sm-12">
			<div class="row">
				@include('Rector.form.ajustes')
			</div>
		</div>
	</div>
@endsection