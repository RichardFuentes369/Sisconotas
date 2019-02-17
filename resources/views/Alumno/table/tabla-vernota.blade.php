<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>ID</th>
		<th>Nota 1</th>
		<th>Nota 2</th>
		<th>Nota 3</th>
		<th>Nota 4</th>
		<th>Habilitacion</th>
		<th>Total</th>
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
				<td id="total"></td>
			</tr>
		@endforeach
	</tbody>	
</table>		

