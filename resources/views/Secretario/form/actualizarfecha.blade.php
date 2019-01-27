{!! Form::open(['url' => 'secretario/fechasado']) !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">	
					<div class="row">
						<div class="col-sm-3">
							<span class="input-group-text" id="basic-addon1">ID</span>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="idanho" value="{{ $id }}" readonly="">
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-6">
							<div class="input-group-prepend">
							   <span class="input-group-text" id="basic-addon1">Primer Periodo</span>
							</div> <br>
						    <div class="col-sm-10">
								<input type="date" class="form-control" name="fiprimersemestre" value="{{ $existe->fiprimersemestre }}"><br>
							</div>
						    <div class="col-sm-10">
								<input type="date" class="form-control" name="ffprimersemestre" value="{{ $existe->ffprimersemestre }}"><br>
							</div> 
							<div class="input-group-prepend">
							   <span class="input-group-text" id="basic-addon1">Segundo Periodo</span>
							</div> <br>
						    <div class="col-sm-10">
								<input type="date" class="form-control" name="fisegundosemestre" value="{{ $existe->fisegundosemestre }}"><br>
							</div>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="ffsegundosemestre" value="{{ $existe->fisegundosemestre }}"><br>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="input-group-prepend">
							   <span class="input-group-text" id="basic-addon1">Tercer Periodo</span>
							</div> <br>
						    <div class="col-sm-10">
								<input type="date" class="form-control" name="fitercersemestre" value="{{ $existe->fitercersemestre }}"><br>
							</div>
						    <div class="col-sm-10">
								<input type="date" class="form-control" name="fftercersemestre" value="{{ $existe->fitercersemestre }}"><br>
							</div> 
							<div class="input-group-prepend">
							   <span class="input-group-text" id="basic-addon1">Cuarto Periodo</span>
							</div> <br>
						    <div class="col-sm-10">
								<input type="date" class="form-control" name="ficuartosemestre" value="{{ $existe->ficuartosemestre }}"><br>
							</div>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="ffcuartosemestre" value="{{ $existe->ffcuartosemestre }}"><br>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
							{{ Form::submit('Actualizar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
						</div>
						<div class="col-sm-4"></div>
					</div>
				</div>
			</div>
		</div>
{!! Form::close() !!}


