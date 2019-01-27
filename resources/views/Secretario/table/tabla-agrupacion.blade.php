<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($listagrupo as $lista)
			<tr>
				<td>{{ $lista ->  id}}</td>
				<td>{{ $lista ->  nombre_alumno}}</td>
				<td>{{ $lista ->  apellido_alumno}}</td>
				<td>{{ $lista ->  dni}}</td>
				<td>
					<form action="#" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'agrupacionb' }}/{{ $lista -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el año con id {{ $lista -> id }}');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>
