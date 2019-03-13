<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Grupo</th>
		<th>Materia</th>
		<th>Opciónes</th>
	</thead>
	<tbody>		
		@foreach ($mismaterias as $lista)
			<tr>
				<td>{{ $lista ->  id}}</td>
				<td>{{ $grupo }}</td>
				<td>{{ $lista ->  nombre_materia}}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'materiasasignadasb' }}/{{ $lista -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar la materia con id {{ $lista -> id }}');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>
