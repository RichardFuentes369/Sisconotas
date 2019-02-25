<table id="tabla" border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		@foreach($consultaporcentajes as $consul2)
		<th>ID</th>
		<th id="porcentaje1">{{ $consul2 -> ppsemestre }}</th>
		<th id="porcentaje2">{{ $consul2 -> pssemestre }}</th>
		<th id="porcentaje3">{{ $consul2 -> ptsemestre }}</th>
		<th id="porcentaje4">{{ $consul2 -> pcsemestre }}</th>
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
				<td id="total" style="background-color: #8F8F8F;color: #000000;border-radius: 16px;"></td>
			</tr>
	</tbody>	
</table>		

<script>
	var TotalSuma = 0;
	var n1 = document.getElementById("nota1").innerHTML;
	var n2 = document.getElementById("nota2").innerHTML;
	var n3 = document.getElementById("nota3").innerHTML;
	var n4 = document.getElementById("nota4").innerHTML;
	var h = document.getElementById("habilitacion").innerHTML;
	var p1 = document.getElementById("porcentaje1").innerHTML;
	var p2 = document.getElementById("porcentaje2").innerHTML;
	var p3 = document.getElementById("porcentaje3").innerHTML;
	var p4 = document.getElementById("porcentaje4").innerHTML;

	
	if(n1 != ""){
		TotalSuma = (((parseInt(n1) * parseInt(p1))/100));
		if(n2 != ""){
			TotalSuma = (((parseInt(n1) * parseInt(p1))/100)+((parseInt(n2) * parseInt(p2))/100));
			if(n3 != ""){
				TotalSuma = (((parseInt(n1) * parseInt(p1))/100)+((parseInt(n2) * parseInt(p2))/100)+((parseInt(n3) * parseInt(p3))/100));
				if(n4 != ""){
					TotalSuma = (((parseInt(n1) * parseInt(p1))/100)+((parseInt(n2) * parseInt(p2))/100)+((parseInt(n3) * parseInt(p3))/100)+((parseInt(n4) * parseInt(p4))/100));
				}else{
					TotalSuma = (((parseInt(n1) * parseInt(p1))/100)+((parseInt(n2) * parseInt(p2))/100)+((parseInt(n3) * parseInt(p3))/100));	
				}
			}else{
				TotalSuma = (((parseInt(n1) * parseInt(p1))/100)+((parseInt(n2) * parseInt(p2))/100));
			}
		}else{
			TotalSuma = (((parseInt(n1) * parseInt(p1))/100));
		}
	}else{
		TotalSuma = "No hay notas registradas";
	}

	if(h !== ""){
		TotalSuma = (parseInt(TotalSuma)*0.50 + parseInt(h)*0.50);
	}
	document.getElementById('total').innerHTML = TotalSuma;
</script>


