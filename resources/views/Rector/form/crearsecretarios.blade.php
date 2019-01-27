{!! Form::open(['url' => 'rector/secretariosc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Nombres</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el nombre del usuario', 'name' => 'name','required']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Apellidos</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese los apellidos del usuario', 'name' => 'lastname','required']) }}
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">DNI</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el dni del usuario', 'name' => 'dni','required']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Sexo</span>
						</div>
            			{{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['class' => 'form-control', 'placeholder' => '--     Seleccione--', 'required']) }}
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el numero del usuario', 'name' => 'phone','required']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Celular</span>
						</div>
				    	{{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el numero del usuario', 'name' => 'cellphone','required']) }}
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
						</div>
					    {{ Form::date('text',null,['class' => 'form-control', 'type' => 'name','name' => 'birthdate','required']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						  </div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el nombre del usuario', 'name' => 'email','required']) }}
					</div>
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}