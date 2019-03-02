

<table id="tabla" border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		@foreach($consultaporcentajes as $consul2)
		<th>ID</th>
		<th id="porcentaje1">{{ $consul2 -> ppsemestre }}</th>	
		<th id="porcentaje2">{{ $consul2 -> pssemestre }}</th>
		<th id="porcentaje3">{{ $consul2 -> ptsemestre }}</th>
		<th id="porcentaje4">{{ $consul2 -> pcsemestre }}</th>
		<th id="phabilitacion">{{ $consul2 -> phabilitacion }}</th>
		<th>Total</th>
		<th>Opción</th>
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
				<td id="total" style="background-color: #8F8F8F;color: #000000;border-radius: 16px"></td>
				<td>
					<form action="{{ url('profesor')}}/{{ 'notasa' }}/{{ $consul -> id }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones" title="Actualizar Nota">
							<i class="material-icons">refresh</i>
						</button>
					</form>
				</td>
		@endforeach
			</tr>
	</tbody>	
</table>		

<script>
	var TotalSuma = 0;
	var CalcularPorcentaje = 0;
	var Porcentajeh = 0;
	var n1 = document.getElementById("nota1").innerHTML;
	var n2 = document.getElementById("nota2").innerHTML;
	var n3 = document.getElementById("nota3").innerHTML;
	var n4 = document.getElementById("nota4").innerHTML;
	var h = document.getElementById("habilitacion").innerHTML;
	var p1 = document.getElementById("porcentaje1").innerHTML;
	var p2 = document.getElementById("porcentaje2").innerHTML;
	var p3 = document.getElementById("porcentaje3").innerHTML;
	var p4 = document.getElementById("porcentaje4").innerHTML;
	var ph = document.getElementById("phabilitacion").innerHTML;

	
	if(n1 != ""){
		TotalSuma = (((parseFloat(n1) * parseInt(p1))/100));
		RedondeandoSuma = TotalSuma.toFixed(1);
		if(n2 != ""){
			TotalSuma = (((parseFloat(n1) * parseInt(p1))/100)+((parseFloat(n2) * parseInt(p2))/100));
			RedondeandoSuma = TotalSuma.toFixed(1);
			if(n3 != ""){
				TotalSuma = (((parseFloat(n1) * parseInt(p1))/100)+((parseFloat(n2) * parseInt(p2))/100)+((parseFloat(n3) * parseInt(p3))/100));
				RedondeandoSuma = TotalSuma.toFixed(1);
				if(n4 != ""){
					TotalSuma = (((parseFloat(n1) * parseInt(p1))/100)+((parseFloat(n2) * parseInt(p2))/100)+((parseFloat(n3) * parseInt(p3))/100)+((parseFloat(n4) * parseInt(p4))/100));
					RedondeandoSuma = TotalSuma.toFixed(1);
				}else{
					TotalSuma = (((parseFloat(n1) * parseInt(p1))/100)+((parseFloat(n2) * parseInt(p2))/100)+((parseFloat(n3) * parseInt(p3))/100));	
					RedondeandoSuma = TotalSuma.toFixed(1);
				}
			}else{
				TotalSuma = (((parseFloat(n1) * parseInt(p1))/100)+((parseFloat(n2) * parseInt(p2))/100));
				RedondeandoSuma = TotalSuma.toFixed(1);
			}
		}else{
			TotalSuma = (((parseFloat(n1) * parseInt(p1))/100));
			RedondeandoSuma = TotalSuma.toFixed(1);
		}
	}else{
		RedondeandoSuma = "No hay notas registradas";
	}

	if(h !== ""){
		CalcularPorcentaje = (100 - parseInt(ph))/100;
		Porcentajeh = (parseInt(ph))/100;
		TotalSuma = parseFloat(CalcularPorcentaje)*TotalSuma 
					+ parseFloat(h)*parseFloat(Porcentajeh);
		RedondeandoSuma = TotalSuma.toFixed(1);
	}
	document.getElementById('total').innerHTML = RedondeandoSuma;
</script>


