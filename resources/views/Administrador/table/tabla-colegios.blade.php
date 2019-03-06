<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>Nit</th>
		<th>Razón Social</th>
		<th>Correo</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($colegios as $colegio)
			<tr>
				<td>{{ $colegio -> nit }}</td>
				<td>{{ $colegio -> razon_social }}</td>
				<td>{{ $colegio -> correo }}</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'colegiosv' }}/{{ $colegio -> nit }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>				
				<td>
					<form action="{{ url('administrador')}}/{{ 'colegiosa' }}/{{ $colegio -> nit }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Actualizar">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'colegiosb' }}/{{ $colegio -> nit }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el colegio con NIT {{ $colegio -> nit }}?');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-5"></div>
		<div class="col-sm-5"></div>
		<div class="col-sm-2">
		{{ $colegios->links( "pagination::bootstrap-4") }}</div>
	</div>
</div>