{!! Form::open(['url' => 'index/Loguin']) !!}
    {{ csrf_field() }}
    <div class="container">
    <br>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1">
              <span class="input-group-addon"><i class="material-icons">person</i></span>
            </div>
            <div class="col-sm-11">
              {{ Form::text('text',null,['class' => 'form-control', 'type' => 'Username', 'placeholder' => 'example@hotmail.com', 'name' => 'email']) }}
              {!! $errors->first('email', '<span class="help-block" style="color:red">:message</span>') !!}
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1">
              <span class="input-group-addon"><i class="material-icons">vpn_key</i></span>
            </div>
            <div class="col-sm-11">
              {{ Form::password('password', ['class' => 'form-control','placeholder' => '***********']) }}<br>
              {!! $errors->first('password', '<span class="help-block" style="color:red">:message</span>') !!}
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12"> 
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              {{ Form::submit('Ingresar',array('class'=>'btn btn-success btn-block')) }}
            </div>
          </div>         
        </div>
      </div>
    </div>
{!! Form::close() !!}