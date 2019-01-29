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
					    	'name' => 'id_anho','required','readonly']) }}
					</div>
					<div class="input-group mb-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">DNI</span>
							</div>
						    <select id="id" name="id" class="custom-select" onchange="return buscar(this.value);" required>
								<option value="0" selected>Seleccióne</option>
								@foreach($profesor as $listar)
									<option value="{{ $listar -> dni }}">{{ $listar -> dni }} {{ $listar -> lastname }} {{ $listar -> name }}</option>
								@endforeach
							</select>
						</div>
						<input type="text" class="form-control" id="showId" name="name" readonly>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Materias</span>
						</div>
						<select class="selectpicker form-control" multiple data-live-search="true" required>
						 	@foreach($materias as $listar)
								<option value="{{ $listar -> id }}">{{ $listar -> nombre_materia }}</option>
							@endforeach
						</select>
					</div><br>
				</div>
			</div>
			<div class="modal-footer">
            	{{ Form::submit('Agregar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    </div>
		</div>
	</center>
{!! Form::close() !!}

<script>
	function buscar($id){
		if($id != 0){
			document.getElementById('showId').value=document.getElementById('id').value;
		}else{
			document.getElementById('showId').value="";	
		}
	}
	$('select').selectpicker();
</script>
	
