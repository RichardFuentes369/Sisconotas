<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		@foreach($consultaporcentajes as $consul2)
		<th>ID</th>
		<th>Nota 1 <br>({{ $consul2 -> ppsemestre }}%)</th>
		<th>Nota 2 <br>({{ $consul2 -> pssemestre }}%)</th>
		<th>Nota 3 <br>({{ $consul2 -> ptsemestre }}%)</th>
		<th>Nota 4 <br>({{ $consul2 -> pcsemestre }}%)</th>
		<th>Habilitacion</th>
		<th>Opción</th>
		<th>Total</th>
		@endforeach
	</thead>
	<tbody>
		@foreach ($consulta_notas as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td id="nota1">{{ $consul -> nota1 }}</td>
				<td id="nota2">{{ $consul -> nota2 }}</td>
				<td id="nota3">{{ $consul -> nota3 }}</td>
				<td id="nota4">{{ $consul -> nota4 }}</td>				
				<td id="habilitacion">{{ $consul -> habilitacion }}</td>
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

