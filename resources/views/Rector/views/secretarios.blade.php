@extends('Plantilla.prector')
<br>
@section('content')
	<div class="container contenidoR">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h3>Secretarios</h3>
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
					@include('Rector.table.tabla-secretarias')
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
        <h4 class="modal-title">Nueva Secretaria</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	@include('Rector.form.crearsecretarios')
      </div>
    </div>
  </div>
</div>
