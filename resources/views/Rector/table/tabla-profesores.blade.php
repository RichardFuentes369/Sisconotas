<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>DNI</th>
		<th>Nombre</th>
		<th>Colegio</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($profesores as $profesor)
			<tr>
				<td>{{ $profesor -> dni }}</td>
				<td>{{ $profesor -> name }}<br>{{ $profesor -> lastname }}</td>
				<td>{{ $profesor -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('rector')}}/{{ 'profesoresv' }}/{{ $profesor -> dni }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('rector')}}/{{ 'profesoresa' }}/{{ $profesor -> dni }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('rector')}}/{{ 'profesoresb' }}/{{ $profesor -> dni }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el/la secretaria(o) con DNI: {{ $profesor -> dni }}?');">
							<i class="material-icons">delete_sweep</i>	
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
{{ $profesores->links( "pagination::bootstrap-4") }}