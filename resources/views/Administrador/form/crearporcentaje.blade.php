{!! Form::open(['url' => 'administrador/porcentajesc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Colegio</span>
						</div>
						<select class="custom-select" name="idColegio">
							<option selected>Seleccióne</option>
							@foreach($colegios as $colegio)
								<option value="{{ $colegio -> id }}">{{ $colegio -> razon_social }}</option>
							@endforeach
						</select>
					</div> 
				</div>	
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Primer Periodo</span>
						</div>
					    {{ Form::number('number',null,['class' => 'form-control','step'=>'any', 'type' => 'name', 'placeholder' => 'Ingrese el % del primer periodo', 'name' => 'nota1','required','min' => '0', 'max' => '100']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Segundo Periodo</span>
						</div>
					    {{ Form::number('number',null,['class' => 'form-control','step'=>'any', 'type' => 'name', 'placeholder' => 'Ingrese el % del segundo periodo', 'name' => 'nota2','required','min' => '0', 'max' => '100']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Tercer Periodo</span>
						</div>
					    {{ Form::number('number',null,['class' => 'form-control','step'=>'any', 'type' => 'name', 'placeholder' => 'Ingrese el % del tercer periodo', 'name' => 'nota3','required','min' => '0', 'max' => '100']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Cuarto Periodo</span>
						</div>
					    {{ Form::number('number',null,['class' => 'form-control','step'=>'any', 'type' => 'name', 'placeholder' => 'Ingrese el % del cuarto periodo', 'name' => 'nota4','required','min' => '0', 'max' => '100']) }}
					</div>
				</div>
			</div>
            <div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}