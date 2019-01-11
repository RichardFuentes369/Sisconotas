{!! Form::open(['url' => 'administrador/colegiosc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">NIT</span>
				</div>
					{{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el nit del colegio', 'name' => 'nit','required']) }}
				</div> 
				<div class="input-group mb-3">
					<div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1">Razón Social</span>
					  </div>
				    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el nombre del colegio', 'name' => 'razon_social','required']) }}
				</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Pais</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el pais del establecimiento', 'name' => 'pais','required']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Departamento</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el departamento del establecimiento', 'name' => 'departamento','required']) }}
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Ciudad</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el ciudad del establecimiento', 'name' => 'ciudad','required']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Barrio</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el barrio del establecimiento', 'name' => 'barrio','required']) }}
					</div> 
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Dirección</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese la dirección del establecimiento', 'name' => 'direccion','required']) }}
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Fijo</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el numero del colegio', 'name' => 'telefono','required']) }}
					</div> 
				</div>
				<div class="col-sm-6">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">@</span>
						</div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el correo del colegio', 'name' => 'correo','required']) }}
					</div> 
				</div>
			</div>
            <div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}