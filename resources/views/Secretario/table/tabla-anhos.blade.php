<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Año</th>
		<th>Colegio</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($anhos as $anho)
			<tr>
				<td>{{ $anho -> id }}</td>
				<td>{{ $anho -> anho }}</td>
				<td>{{ $anho -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'cursosv' }}/{{ $anho -> id }}/{{ $anho -> anho }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'fechasa' }}/{{ $anho -> id }}/{{ $anho -> anho }}" method="Get">
						<button class="btn btn-success btn-sm botonfunciones" title="Fecha Corte Periodo">
							<i class="material-icons">calendar_today</i>	
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'anhosb' }}/{{ $anho -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el año con id {{ $anho -> id }}?');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
{!! $anhos->render() !!}	

