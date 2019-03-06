<table border="0" class="table table-responsive table-hover" style="text-align: center">
	<thead class="tableth">
		<th>DNI</th>
		<th>Nombre</th>
		<th>Colegio</th>
		<th colspan="3">Opciónes</th>
	</thead>
	<tbody>
		@foreach ($secretarios as $secretario)
			<tr>
				<td>{{ $secretario -> dni }}</td>
				<td>{{ $secretario -> name }}<br>{{ $secretario -> lastname }}</td>
				<td>{{ $secretario -> colegios -> razon_social }}</td>
				<td>
					<form action="{{ url('rector')}}/{{ 'secretariosv' }}/{{ $secretario -> dni }}" method="Get">
						<button class="btn btn-primary btn-sm botonfunciones">
							<i class="material-icons">visibility</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('rector')}}/{{ 'secretariosa' }}/{{ $secretario -> dni }}" method="Get">
						<button class="btn btn-warning btn-sm botonfunciones">
							<i class="material-icons">cached</i>
						</button>
					</form>
				</td>
				<td>
					<form action="{{ url('rector')}}/{{ 'secretariosb' }}/{{ $secretario -> dni }}" method="Get">
						<button class="btn btn-danger btn-sm botonfunciones" onClick="javascript: return confirm('¿Esta segudo que desea eliminar el/la secretaria(o) con DNI: {{ $secretario -> dni }}?');">
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
			{{ $secretarios->links( "pagination::bootstrap-4") }}</div>
	</div>
</div>