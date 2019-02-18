{!! Form::open(['url' => 'rector/ajustesR']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombres</span>
						  </div>
					    {{ Form::text('text', Auth::user()->name ,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el nombre del usuario', 'name' => 'name','required']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
					    {{ Form::text('text',Auth::user()->lastname,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese los apellidos del usuario', 'name' => 'lastname','required']) }}
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
					    {{ Form::text('text',Auth::user()->dni,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el dni del usuario', 'name' => 'dni','required', 'readonly']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
            			{{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], Auth::user()->sexo, ['class' => 'form-control', 'placeholder' => '--     Seleccione--', 'required']) }}
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
					    {{ Form::text('text',Auth::user()->phone,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el numero del usuario', 'name' => 'phone','required']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
				    	{{ Form::text('text',Auth::user()->cellphone,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el numero del usuario', 'name' => 'cellphone','required']) }}
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
					    {{ Form::date('text',Auth::user()->birthdate,['class' => 'form-control', 'type' => 'name','name' => 'birthdate','required']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
					    {{ Form::text('text',Auth::user()->email,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el nombre del usuario', 'name' => 'email','required', 'readonly']) }}
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Contraseña</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese la nueva contraseña', 'name' => 'password','required']) }}
					</div> 
				</div>
				<marquee>Si luego de actualizar algun dato el sistema te saca, recuerda que debes iniciar nuevamente la sessión. Y si
				actualizaste la contraseña, ingresa con la nueva contraseña.</marquee>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Actualizar',array('class'=>'btn btn-warning botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}
