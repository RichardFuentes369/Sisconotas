{!! Form::open(['url' => 'secretario/#']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Colegio</span>
						</div>
					    {{ Form::text('text', Auth::user()->colegios->id ,['class' => 'form-control', 'type' => 'name',
					    	'name' => 'id_anho','required','readonly']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Materia</span>
						 </div>
					    {{ Form::text('text', null ,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Quimica', 'name' => 'grupo','required']) }}
					</div> 
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}