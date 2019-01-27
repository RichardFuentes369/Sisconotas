<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Profesor Encargado</th>
		<th>Grado</th>
		<th>Colegio</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($curso as $cursos)
			<tr>
				<td>{{ $cursos -> id }}</td>
				<td>{{ $cursos -> nombre_profesor }}</td>
				<td>{{ $cursos -> nombre }}</td>
				<td>{{ $cursos -> anhos -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'alumnosv' }}/{{ $cursos -> anhos -> anho }}/{{ $cursos -> nombre }}/{{ $cursos -> id }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Ver">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="#" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Editar">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'cursosb' }}/{{ $cursos -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones"  title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el año con id {{ $cursos -> id }}?');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
{!! $curso->render() !!}	

