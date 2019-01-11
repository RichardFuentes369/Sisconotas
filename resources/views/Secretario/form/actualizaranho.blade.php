{!! Form::open(['url' => 'secretario/anhosado']) !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','ID', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="id" id="id" readonly value="{{ $existe->id }}"><br>
						</div>
					</div>
				</div>	
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">
							{{ Form::label('name','AÑO', array('class' => 'input-group-prepend', 'style' => 'font-weight: 900;background-color:white;color:black;padding-top: 6px;')) }} <br>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="anho" id="anho" value="{{ $existe->anho }}"><br>
						</div>
					</div>
				</div>	
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-8">
							{{ Form::submit('Actualizar',array('class'=>'btn btn-success')) }}
						</div>
					</div>
				</div>
			</div>
		</div>
{!! Form::close() !!}
