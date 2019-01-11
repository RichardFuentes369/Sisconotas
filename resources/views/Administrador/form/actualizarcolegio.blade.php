{!! Form::open(['url' => 'administrador/colegiosado']) !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','NIT', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" name="nit" id="nit" value="{{ $existe->nit }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Razon Social', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="razon" id="razon" value="{{ $existe->razon_social }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Dirección', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="direccion" id="direccion" value="{{ $existe->direccion }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Barrio', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="barrio" id="barrio" value="{{ $existe->barrio }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Telefono', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="telefono" id="telefono" value="{{ $existe->telefono }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Correo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="correo" id="correo" value="{{ $existe->correo }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-8">
							{{ Form::submit('Actualizar',array('class'=>'btn btn-success')) }}
						</div>
					</div>
				</div>
			</div>
		</div>
{!! Form::close() !!}

