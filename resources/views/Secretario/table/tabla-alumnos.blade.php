<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>DNI</th>
		<th>Nombre</th>
		<th>Colegio</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($alumnos as $alumno)
			<tr>
				<td>{{ $alumno -> dni }}</td>
				<td>{{ $alumno -> name }}<br>{{ $alumno -> lastname }}</td>
				<td>{{ $alumno -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'alumnosv' }}/{{ $alumno -> dni }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'alumnosa' }}/{{ $alumno -> dni }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Editar">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'alumnosb' }}/{{ $alumno -> dni }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el alumno con DNI {{ $alumno -> dni }}?');">
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
			{{ $alumnos->links( "pagination::bootstrap-4") }}</div>
	</div>
</div>