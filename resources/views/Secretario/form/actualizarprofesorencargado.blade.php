{!! Form::open(['url' => 'secretario/profesorencargadoado']) !!}
	{{ csrf_field() }}
		<div class="col-sm-12">
			<br>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">ID</span>
							</div>
							<input type="text" class="form-control" readonly="" name="idactualizar" value="{{ $id }}">
						</div>
					</div> 
					<div class="input-group mb-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Profesor</span>
							</div>
						    <select id="id" name="id" class="custom-select" onchange="return buscar(this.value);" required>
								<option value="0" selected>Seleccióne</option>
								@foreach($profesores as $listar)
									<option value="{{ $listar -> dni }}">{{ $listar -> dni }} {{ $listar -> lastname }} {{ $listar -> name }}</option>
								@endforeach
							</select>
						</div>
						<input type="text" class="form-control" id="showId" name="dni" readonly>
					</div> 
				</div>
			</div>
            {{ Form::submit('Actualizar',array('class'=>'btn btn-success botonejecutarfuncion')) }}
		    
		</div>
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
	
