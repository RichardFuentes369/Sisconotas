<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Opciónes</th>
	</thead>
	<tbody>
		@foreach ($listagrupo as $lista)
			<tr>
				<td>{{ $lista ->  id}}</td>
				<td>{{ $lista ->  nombre_alumno}}</td>
				<td>{{ $lista ->  apellido_alumno}}</td>
				<td>{{ $lista ->  dni}}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'alumnosasignadosb' }}/{{ $lista -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el alumno con id {{ $lista -> id }}');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>