<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>DNI</th>
		<th>Apellido</th>
		<th>Nombre</th>
	</thead>
	<tbody>
		@foreach ($consulta as $consul)
			<tr>
				<td>{{ $consul -> dni }}</td>
				<td>{{ $consul -> apellido_alumno }}</td>
				<td>{{ $consul -> nombre_alumno }}</td>
			</tr>
		@endforeach
	</tbody>	
</table>		