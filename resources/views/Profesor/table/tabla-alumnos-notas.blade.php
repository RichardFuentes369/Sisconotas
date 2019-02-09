<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>DNI</th>
		<th>Apellido</th>
		<th>Nombre</th>
		<th>Opción</th>
	</thead>
	<tbody>
		@foreach ($consulta as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td>{{ $consul -> dni }}</td>
				<td>{{ $consul -> apellido_alumno }}</td>
				<td>{{ $consul -> nombre_alumno }}</td>
				<td><form action="{{ url('profesor')}}/{{ 'listarNAP' }}/{{ $consul -> grado_id }}/{{ $consul -> id }}/{{ $consul -> dni }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form></td>
			</tr>
		@endforeach
	</tbody>	
</table>		