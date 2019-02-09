<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Nota 1</th>
		<th>Nota 2</th>
		<th>Nota 3</th>
		<th>Nota 4</th>
		<th>Opción</th>
		<th>Total</th>
	</thead>
	<tbody>
		@foreach ($consulta_notas as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td id="nota1">{{ $consul -> nota1 }}</td>
				<td id="nota2">{{ $consul -> nota2 }}</td>
				<td id="nota3">{{ $consul -> nota3 }}</td>
				<td id="nota4">{{ $consul -> nota4 }}</td>
				<td>
					<form action="{{ url('profesor')}}/{{ 'notasa' }}/{{ $consul -> id }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Actualizar Nota">
							<i class="material-icons">refresh</i>
						</button>
					</form>
				</td>
				<td id="total"></td>
			</tr>
		@endforeach
	</tbody>	
</table>		

