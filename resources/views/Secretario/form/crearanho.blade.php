{!! Form::open(['url' => 'secretario/anhosc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Año</span>
						  </div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => '20**', 'name' => 'anho','required']) }}
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12"> 
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Primer Periodo</span>
								<input type="number" class="form-control" min="0" max="100" name="ppsemestre" placeholder="% periodo">	
							</div> <br>
							<div class="row">
							    <div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Inicio</span>
									<input type="date" class="form-control" name="fiprimersemestre"><br>
								</div>
								<div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Fin</span>
									<input type="date" class="form-control" name="ffprimersemestre"><br>
								</div>								
							</div>
						</div>
						<div class="col-sm-12"> 
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Segundo Periodo</span>
								<input type="number" class="form-control" min="0" max="100" name="pssemestre" placeholder="% periodo">	
							</div> <br>
							<div class="row">
							    <div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Inicio</span>
									<input type="date" class="form-control" name="fisegundosemestre"><br>
								</div>
								<div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Fin</span>
									<input type="date" class="form-control" name="ffsegundosemestre"><br>
								</div>								
							</div>
						</div>
						<div class="col-sm-12"> 
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Tercer Periodo</span>
								<input type="number" class="form-control" min="0" max="100" name="ptsemestre" placeholder="% periodo">	
							</div> <br>
							<div class="row">
							    <div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Inicio</span>
									<input type="date" class="form-control" name="fitercersemestre"><br>
								</div>
								<div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Fin</span>
									<input type="date" class="form-control" name="fftercersemestre"><br>
								</div>								
							</div>
						</div>
						<div class="col-sm-12"> 
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Cuarto Periodo</span>
								<input type="number" class="form-control" min="0" max="100" name="pcsemestre" placeholder="% periodo">	
							</div> <br>
							<div class="row">
							    <div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Inicio</span>
									<input type="date" class="form-control" name="ficuartosemestre"><br>
								</div>
								<div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Fin</span>
									<input type="date" class="form-control" name="ffcuartosemestre"><br>
								</div>								
							</div>
						</div>
						<div class="col-sm-12"> 
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Habilitación</span>
								<input type="number" class="form-control" min="0" max="100" name="phabilitacion" placeholder="% habilitacion">
							</div> <br>
							<div class="row">
							    <div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Inicio</span>
									<input type="date" class="form-control" name="fihabilitacion"><br>
								</div>
								<div class="col-sm-6">
									<span class="input-group-text" id="basic-addon1">Fecha Fin</span>
									<input type="date" class="form-control" name="ffhabilitacion"><br>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}
