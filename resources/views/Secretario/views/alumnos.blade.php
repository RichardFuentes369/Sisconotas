@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Alumnos</h3>
					registrados en el sistema
				</div>
				<div class="col-sm-2">
					<br>
					<button type="button" class="btn btn-success botonanadir" data-toggle="modal" data-target="#myModal">Añadir</button>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					@include('flash::message')
					@include('Secretario.table.tabla-alumnos')
				</div>	
				<div class="col-sm-1"></div>		
			</div>
		</div>
	</div>
@endsection

<!--Modal-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nuevo Alumno</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
      	@include('Secretario.form.crearalumno')
      </div>
    </div>
  </div>
</div>