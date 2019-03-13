{!! Form::open(['url' => 'secretario/materiasasignadasc']) !!}
	{{ csrf_field() }}
	<center>
		<div class="col-sm-12"><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" class="form-control" readonly="" name="grado" value="{{ $id }}"><br>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1">Materia</span>
						  </div>
					    <select multiple="" id="id" name="id" class="custom-select" onchange="return buscar(this.value);">
							<option value="0" selected>Seleccióne</option>
							@foreach($listarmaterias as $listar)
								<option value="{{ $listar -> nombre_materia }}">{{ $listar -> nombre_materia }}</option>
							@endforeach
						</select>
					</div>
					<input type="text" class="form-control" id="showId" name="nombre_materia">
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
</script>


