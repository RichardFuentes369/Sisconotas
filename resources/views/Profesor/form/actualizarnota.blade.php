{!! Form::open(['url' => 'profesor/notasado']) !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','ID', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly  class="form-control static" name="id" id="id" value="{{ $existe -> id }}"><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Primer Periodo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="number" min="0.0" max="5.0" step="0.1" class="form-control static" name="nota1" id="nota1" value="{{ $existe -> nota1 }}"><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Segundo Periodo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="number" min="0.0" max="5.0" step="0.1" class="form-control static" name="nota2" id="nota2" value="{{ $existe -> nota2 }}"><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Tercer Periodo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="number" min="0.0" max="5.0" step="0.1" class="form-control static" name="nota3" id="nota3" value="{{ $existe -> nota3 }}"><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Cuarto Periodo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="number" min="0.0" max="5.0" step="0.1" class="form-control static" name="nota4" id="nota4" value="{{ $existe -> nota4 }}"><br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Habilitacion', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="number" min="0.0" max="5.0" step="0.1" class="form-control static" name="habilitacion" id="habilitacion" value="{{ $existe -> habilitacion }}"><br>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="col-sm-8">
								{{ Form::submit('Actualizar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
{!! Form::close() !!}

