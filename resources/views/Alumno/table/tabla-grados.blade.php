<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Grado</th>
		<th>Profesor Encargado</th>
		<th>Opciónes</th>
	</thead>
	<tbody>
		@foreach ($consulta as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td>{{ $consul -> nombre }}</td>
				<td>{{ $consul -> nombre_profesor }}</td>
				<td>
					<form action="{{ url('alumno')}}/{{ 'materiasl' }}/{{ $consul -> id }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Actualizar">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
