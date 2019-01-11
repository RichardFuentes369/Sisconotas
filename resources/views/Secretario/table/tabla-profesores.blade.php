<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>DNI</th>
		<th>Nombre</th>
		<th>Colegio</th>
		<th colspan="2">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($profesores as $profesor)
			<tr>
				<td>{{ $profesor -> dni }}</td>
				<td>{{ $profesor -> name }}<br>{{ $profesor -> lastname }}</td>
				<td>{{ $profesor -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'profesoresv' }}/{{ $profesor -> dni }}" method="Get">
						<button class="btn btn-primary btn-sm">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'profesoresa' }}/{{ $profesor -> dni }}" method="Get">
						<button class="btn btn-warning btn-sm">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
{!! $profesores->render() !!}	