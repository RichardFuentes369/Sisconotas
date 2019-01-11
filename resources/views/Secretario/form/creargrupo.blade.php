{!! Form::open(['url' => 'secretario/cursosc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Grupo</span>
						 </div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => '1-1', 'name' => 'grupo','required']) }}
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">ID</span>
						</div>
					    {{ Form::text('text', $id ,['class' => 'form-control', 'type' => 'name',
					    	'name' => 'id','required','readonly']) }}
					</div> 
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}
