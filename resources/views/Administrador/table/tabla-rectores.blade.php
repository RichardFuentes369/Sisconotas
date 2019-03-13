<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>DNI</th>
		<th>Nombre</th>
		<th>Colegio</th>
		<th>Correo</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($rectores as $rector)
			<tr>
				<td>{{ $rector -> dni }}</td>
				<td>{{ $rector -> name }} {{ $rector -> lastname }}</td>
				<td>{{ $rector -> colegios -> razon_social }}</td>
				<td>{{ $rector -> email }}</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'rectoresv' }}/{{ $rector -> dni }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'rectoresa' }}/{{ $rector -> dni }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Actualizar">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'rectoresb' }}/{{ $rector -> dni }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta seguro que desea eliminar el usuario con DNI {{ $rector -> dni }}?');">
							<i class="material-icons">delete_sweep</i>	
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
{{ $rectores->links( "pagination::bootstrap-4") }}