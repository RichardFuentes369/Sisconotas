{!! Form::open(['url' => 'secretario/profesoresado']) !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','DNI', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control static" name="dni" id="dni" readonly value="{{ $existe->dni }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">							
							{{ Form::label('name','Nombre', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" required class="form-control static" name="name" id="name" value="{{ $existe->name }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('lastname','Apellido', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" required class="form-control static" name="lastname" id="lastname" value="{{ $existe->lastname }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Correo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control static" name="email" id="email" readonly value="{{ $existe->email }}"><br>
						</div>
					</div>
				</div>				
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Contraseña', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control static" name="password" id="password"><br>
						</div>
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
{!! Form::close() !!}
