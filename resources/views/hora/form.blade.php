<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('hora_formato_24') }}
            {{ Form::text('hora_formato_24', $hora->hora_formato_24, ['class' => 'form-control' . ($errors->has('hora_formato_24') ? ' is-invalid' : ''), 'placeholder' => 'Hora Formato 24']) }}
            {!! $errors->first('hora_formato_24', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_id') }}
            {{ Form::text('dia_id', $hora->dia_id, ['class' => 'form-control' . ($errors->has('dia_id') ? ' is-invalid' : ''), 'placeholder' => 'Dia Id']) }}
            {!! $errors->first('dia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>