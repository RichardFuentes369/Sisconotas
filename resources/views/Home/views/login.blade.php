@extends('Plantilla.pindex')

@section('title')
	Login
@endsection

@section('content')
	<div class="container contenidoI">
		<br>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<br><br><br>	
						<h3>INGRESO A LA PLATAFORMA</h3>	
						@include('Home.form.form-login')
						<br><br><br><br>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
	</div>
@endsection
