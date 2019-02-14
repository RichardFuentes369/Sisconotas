<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Materia</th>
		<th>Opciones</th>
	</thead>
	<tbody>
		@foreach ($consulta as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td>{{ $consul -> nombre_materia }}</td>
				<td>
					<form action="{{ url('alumno')}}/{{ 'notal' }}/{{ $consul -> id }}/{{ $consul -> nombre_materia }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		