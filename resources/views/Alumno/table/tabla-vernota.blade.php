<table id="tabla" border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		@foreach($consultaporcentajes as $consul2)
		<th>ID</th>
		<th id="porcentaje1">Nota 1 <br>({{ $consul2 -> ppsemestre }}%)</th>
		<th id="porcentaje2">Nota 2 <br>({{ $consul2 -> pssemestre }}%)</th></th>
		<th id="porcentaje3">Nota 3 <br>({{ $consul2 -> ptsemestre }}%)</th></th>
		<th id="porcentaje4">Nota 4 <br>({{ $consul2 -> pcsemestre }}%)</th></th>
		<th>Habilitacion</th>
		<th>Total</th>
		@endforeach
	</thead>
	<tbody>
		@foreach ($consultanotas as $consul)
			<tr>
				<td>{{ $consul -> id }}</td>
				<td id="nota1">{{ $consul -> nota1 }}</td>
				<td id="nota2">{{ $consul -> nota2 }}</td>
				<td id="nota3">{{ $consul -> nota3 }}</td>
				<td id="nota4">{{ $consul -> nota4 }}</td>				
				<td id="habilitacion">{{ $consul -> habilitacion }}</td>
		@endforeach
				<td id="total"></td>
			</tr>
	</tbody>	
</table>		
