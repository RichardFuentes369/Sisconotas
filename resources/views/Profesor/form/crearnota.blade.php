{!! Form::open(['url' => 'profesor/notasc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','ID Gradoo', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="idgrado" id="idgrado" value="{{ $grado_id }}" readonly><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','ID Alumno', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="idalumno" id="idalumno" value="{{ $idalumno }}" readonly><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','ID Materia', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="idmateria" id="idmateria" value="{{ $id_materia }}" readonly><br>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Primer Periodo</span>
						</div>
						{{ Form::number('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Ingrese el valor del primer periodo', 'name' => 'nota1','required', 'min' => '0', 'max' => '5', 'step' => '0.1']) }}
					</div> 
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}