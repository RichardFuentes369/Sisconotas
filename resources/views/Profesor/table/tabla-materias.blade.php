<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Materia</th>
		<th>Opciones</th>
	</thead>
	<tbody>
		@foreach ($consulta_materias as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td>{{ $consul -> nombre_materia }}</td>
				<td><form action="{{ url('profesor')}}/{{ 'listarND' }}/{{ $consul -> grado_id  }}/{{ $consul -> id }}/{{ $consul -> nombre_materia }}/{{ $dni }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Actualizar Notas">
							<i class="material-icons">refresh</i>
						</button>
					</form></td>
			</tr>
		@endforeach
	</tbody>	
</table>		