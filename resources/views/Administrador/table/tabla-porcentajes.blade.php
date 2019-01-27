<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Colegio</th>
		<th>1<sup><u>r</u></sup></th>
		<th>2<sup><u>r</u></sup></th>
		<th>3<sup><u>r</u></sup></th>
		<th>4<sup><u>r</u></sup></th>
		<th colspan="2">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($porcentajes as $porcentaje)
			<tr>
				<td>{{ $porcentaje -> colegios -> id }}</td>
				<td>{{ $porcentaje -> colegios -> razon_social }}</td>
				<td>{{ $porcentaje -> periodo1 }}%</td>
				<td>{{ $porcentaje -> periodo2 }}%</td>
				<td>{{ $porcentaje -> periodo3 }}%</td>
				<td>{{ $porcentaje -> periodo4 }}%</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'porcentajesa' }}/{{ $porcentaje -> colegios -> id }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Actualizar">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('administrador')}}/{{ 'porcentajesb' }}/{{ $porcentaje -> colegios -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el valor de cada periodo del colegio {{ $porcentaje -> colegios -> id }}?');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
{!! $porcentajes->render() !!}	