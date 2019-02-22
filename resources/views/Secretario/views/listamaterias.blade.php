@extends('Plantilla.psecretario')
<br>
@section('content')
	<div class="container contenidoS">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-10">
					<br>
					<h2>Lista Materias</h2>
					<h3>
						Grupo {{ $grupo }}
					</h3>
					registrada en el sistema
				</div>
				<div class="col-sm-2">
					<br>
					<button type="button" class="btn btn-success botonanadir" data-toggle="modal" data-target="#myModal" title="Crear">Añadir</button>
				</div>
			</div>
			<br>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="{{ url('secretario') }}/{{ 'anhosl' }}">Años</a></li>
			    <li class="breadcrumb-item active" aria-current="page"> {{ $anho }}
			    <li class="breadcrumb-item active" aria-current="page"> {{ $grupo }}
				</li>
			  </ol>
			</nav>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					@include('flash::message')
					@include('Secretario.table.tabla-lista-materias')
				</div>	
				<div class="col-sm-2"></div>		
			</div>
		</div>
	</div>
@endsection


<!--Modal-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Materia</h4>
        <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
      </div>
      <div class="modal-body">
      	@include('Secretario.form.agregarmateria')
      </div>
    </div>
  </div>
</div>