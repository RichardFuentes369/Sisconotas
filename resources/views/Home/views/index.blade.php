@extends('Plantilla.pindex')

@section('title')
	Bienvenidos
@endsection

@section('content')
	<div class="container contenidoI">
		<br>
		<div class="row">
			<div class="col-sm-12">			
				@include('Home.form.form-paginainicial')
			</div>
		</div>
	</div>
@endsection

