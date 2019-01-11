{!! Form::open() !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Nombres', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="name" value="{{ $existe->name }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Apellidos', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="lastname" value="{{ $existe->lastname }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Correo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="email" value="{{ $existe->email }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Fecha Nacimiento', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="birthdate" value="{{ $existe->birthdate }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Sexo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="sexo" value="{{ $existe->sexo }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Telefono', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="phone" value="{{ $existe->phone }}"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','Celular', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" readonly class="form-control" id="cellphone" value="{{ $existe->cellphone }}"><br>
						</div>
					</div>
				</div>
			</div>			
		</div>
{!! Form::close() !!}
