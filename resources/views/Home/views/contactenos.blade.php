@extends('Plantilla.pindex')

@section('title')
	Contactenos
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
				<div class="row">		
					<div class="col-sm-12">
						<center>
						<h3>Contactenos</h3>
						@include('Home.form.form-contactenos')
						</center>
					</div>	
				</div>	
			</div>
		</div>
	</div>
@endsection

