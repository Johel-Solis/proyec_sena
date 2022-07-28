<div class="box box-info padding-1">
    <div class="form-group  ">
        <div class="form-row flex-column justify-content-center align-items-center align-self-center" style="margin-right: 0px;margin-left: 0px;margin-top: -1px;padding-top: 0px;">
        <div class="col-md-8 col-xl-8 offset-md-1">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $ambiente->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" col-md-8 col-xl-8 offset-md-1">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $ambiente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" col-md-8 col-xl-8 offset-md-1">
            {{ Form::label('tipo') }}
            {{ Form::select('tipo',  array('Virtual' => 'Virtual', 'Presencial' => 'Presencial'), $ambiente->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" col-md-8 col-xl-8 offset-md-1">
            {{ Form::label('capacidad') }}
            {{ Form::number('capacidad', $ambiente->capacidad, ['class' => 'form-control' . ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class=" col-md-8 col-xl-8 offset-md-1" >
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $ambiente->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    </div>
    <div class="form-row flex-column justify-content-center align-items-center align-self-center" style="margin-right: 0px;margin-left: 0px;margin-top: -1px;padding-top: 0px;">
    <div class="box-footer mt20 col-md-8 col-xl-8 offset-md-1">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('ambientes.index') }}"> Atras</a>
    </div>

    </div>
</div>
