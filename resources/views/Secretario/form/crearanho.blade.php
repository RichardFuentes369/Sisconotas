{!! Form::open(['url' => 'secretario/anhosc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Año</span>
						  </div>
					    {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => '20**', 'name' => 'anho','required']) }}
					</div> 
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}