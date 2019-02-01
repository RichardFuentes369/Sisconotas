<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>DNI</th>
		<th>Profesor Encargado</th>
		<th>Grado</th>
		<th colspan="4">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($curso as $cursos)
			<tr>
				<td>{{ $cursos -> id }}</td>
				<td>{{ $cursos -> dni_profesor }}</td>
				<td>{{ $cursos -> nombre_profesor }}</td>
				<td>{{ $cursos -> nombre }}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'alumnosasignadosv' }}/{{ $cursos -> anhos -> anho }}/{{ $cursos -> nombre }}/{{ $cursos -> id }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Lista">
							<i class="material-icons">list</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'materiasasignadosv' }}/{{ $cursos -> anhos -> anho }}/{{ $cursos -> nombre }}/{{ $cursos -> id }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones" title="Asignar Materias">
							<i class="material-icons">book</i>
						</button>
					</form>	
				</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'profesorencargadoa' }}/{{ $cursos -> id }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones"  title="Actualizar">
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

