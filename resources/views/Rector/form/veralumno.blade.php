{!! Form::open() !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-2">
					{{ Form::label('name','Nombres', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br>
					{{ Form::label('name','Apellidos', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br><br>
					{{ Form::label('name','Correo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br>
					{{ Form::label('name','Fecha Nacimiento', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br>
					{{ Form::label('name','Sexo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br>
					{{ Form::label('name','Telefono', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br>
					{{ Form::label('name','Celular', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br><br>
				</div>
				<div class="col-sm-9">
					<input type="text" readonly class="form-control" id="razon" value="{{ $existe->name }}"><br>
					<input type="text" readonly class="form-control" id="direccion" value="{{ $existe->lastname }}"><br>
					<input type="text" readonly class="form-control" id="barrio" value="{{ $existe->email }}"><br>
					<input type="text" readonly class="form-control" id="telefono" value="{{ $existe->birthdate }}"><br>
					<input type="text" readonly class="form-control" id="correo" value="{{ $existe->sexo }}"><br>
					<input type="text" readonly class="form-control" id="correo" value="{{ $existe->phone }}"><br>
					<input type="text" readonly class="form-control" id="correo" value="{{ $existe->cellphone }}"><br>
				</div>
			</div>
		</div>
{!! Form::close() !!}
