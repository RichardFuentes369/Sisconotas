<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Materia</th>
		<th>Colegio</th>
		<th>Opción</th>
	</thead>
	<tbody>
		@foreach ($materias as $materia)
			<tr>
				<td>{{ $materia -> id }}</td>
				<td>{{ $materia -> nombre_materia }}</td>
				<td>{{ $materia -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('secretario')}}/{{ 'materiasb' }}/{{ $materia -> id }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" title="Eliminar" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el año con id {{ $materia -> id }}?');">
							<i class="material-icons">delete_sweep</i>
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>		
<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-5"></div>
		<div class="col-sm-5"></div>
		<div class="col-sm-2">
			{{ $materias->links( "pagination::bootstrap-4") }}</div>
	</div>
</div>