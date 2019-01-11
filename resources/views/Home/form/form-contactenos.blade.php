{!! Form::open(['url' => 'index/contactenos']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Nombre Completo')}}
        {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Introduzca su nombre completo', 'name' => 'name','required']) }}
    </div>            
    <div class="form-group">
        {{ Form::label('name', 'Motivo de Contacto')}}
        {{ Form::select('size', ['L' => 'Mas Información', 'S' => 'Queremos Pertenecer', 'XL' => 'Informe de un Problema'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('empresa', 'Nombre de la Empresa')}}
        {{ Form::text('text',null,['class' => 'form-control', 'type' => 'name', 'placeholder' => 'Introduzca el nombre de su Empresa', 'name' => 'empresa','required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Correo Electronico')}}
        {{ Form::text('email',null,['class' => 'form-control', 'type' => 'email', 'placeholder' => 'example@correo.com', 'name' => 'email','required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('mensaje', 'Mensaje')}}
        {{ Form::textarea('mensaje',null,['class' => 'form-control', 'type' => 'textarea', 'placeholder' => 'Dejanos saber cual es el motivo de tu contacto', 'name' => 'textarea', 'maxlength' => '800','required']) }}
    </div>
    <div class="form-group">                
        {{ Form::submit('Enviar',array('class'=>'btn btn-success')) }}
        {{ Form::submit('Limpiar',array('class'=>'btn btn-danger')) }}                
    </div>
{!! Form::close() !!}