@section('estilos')
<link rel="stylesheet"href="{{ asset ('assets/css/styleH.css') }}"/>
@endsection
<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('cantidad_horas') }}
            {{ Form::number('cantidad_horas', $horario->cantidad_horas, ['class' => 'form-control' . ($errors->has('cantidad_horas') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Horas']) }}
            {!! $errors->first('cantidad_horas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('periodo_academico_id') }}
            {{ Form::select('periodo_academico_id',$periodoAcademicos, $horario->periodo_academico_id, ['class' => 'form-control' . ($errors->has('periodo_academico_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('periodo_academico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competencia_id') }}
            {{ Form::select('competencia_id', $competencias,$horario->competencia_id, ['class' => 'form-control' . ($errors->has('competencia_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('competencia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {!! Form::select('docente_id',$docentes, $horario->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : '') ]) !!}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ambiente_id') }}
            {{ Form::select('ambiente_id',$ambientes ,$horario->ambiente_id, ['class' => 'form-control' . ($errors->has('ambiente_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ambiente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<div class="form-group">
    <table style=" padding-top = 20px">



        <thead>

          <th>HORA</th>
          <th>LUNES</th>
          <th>MARTES</th>
          <th>MIERCOLES</th>
          <th>JUEVES</th>
          <th>VIERNES</th>
          <th>SABADO</th>
        </thead>
        <tbody>
          <tr>
            <td>7:00 - 8:00</td>
            <td>{{Form::checkbox('lunes[]', '7')}}</td>
            <td>{{Form::checkbox('martes[]', '7')}}</td>
            <td>{{Form::checkbox('miercoles[]', '7')}}</td>
            <td>{{Form::checkbox('jueves[]', '7')}}</td>
            <td>{{Form::checkbox('viernes[]', '7')}}</td>
            <td>{{Form::checkbox('sabado[]', '7')}}</td>
          </tr>
          <tr>
            <td>8:00 - 9:00</td>
            <td>{{Form::checkbox('lunes[]', '8')}}</td>
            <td>{{Form::checkbox('martes[]', '8')}}</td>
            <td>{{Form::checkbox('miercoles[]', '8')}}</td>
            <td>{{Form::checkbox('jueves[]', '8')}}</td>
            <td>{{Form::checkbox('viernes[]', '8')}}</td>
            <td>{{Form::checkbox('sabado[]', '8')}}</td>
          </tr>
          <tr>
            <td>9:00 - 10:00</td>
            <td>{{Form::checkbox('lunes[]', '9')}}</td>
            <td>{{Form::checkbox('martes[]', '9')}}</td>
            <td>{{Form::checkbox('miercoles[]', '9')}}</td>
            <td>{{Form::checkbox('jueves[]', '9')}}</td>
            <td>{{Form::checkbox('viernes[]', '9')}}</td>
            <td>{{Form::checkbox('sabado[]', '9')}}</td>
          </tr>
          <tr>
            <td>10:00 - 11:00</td>
            <td>{{Form::checkbox('lunes[]', '10')}}</td>
            <td>{{Form::checkbox('martes[]', '10')}}</td>
            <td>{{Form::checkbox('miercoles[]', '10')}}</td>
            <td>{{Form::checkbox('jueves[]', '10')}}</td>
            <td>{{Form::checkbox('viernes[]', '10')}}</td>
            <td>{{Form::checkbox('sabado[]', '10')}}</td>
          </tr>
          <tr>
            <td>11:00 - 12:00</td>
            <td>{{Form::checkbox('lunes[]', '11')}}</td>
            <td>{{Form::checkbox('martes[]', '11')}}</td>
            <td>{{Form::checkbox('miercoles[]', '11')}}</td>
            <td>{{Form::checkbox('jueves[]', '11')}}</td>
            <td>{{Form::checkbox('viernes[]', '11')}}</td>
            <td>{{Form::checkbox('sabado[]', '11')}}</td>
          </tr>
          <tr>
            <td>12:00 - 13:00</td>
            <td>{{Form::checkbox('lunes[]', '12')}}</td>
            <td>{{Form::checkbox('martes[]', '12')}}</td>
            <td>{{Form::checkbox('miercoles[]', '12')}}</td>
            <td>{{Form::checkbox('jueves[]', '12')}}</td>
            <td>{{Form::checkbox('viernes[]', '12')}}</td>
            <td>{{Form::checkbox('sabado[]', '12')}}</td>
          </tr>
          <tr>
            <td>13:00 - 14:00</td>
            <td>{{Form::checkbox('lunes[]', '13')}}</td>
            <td>{{Form::checkbox('martes[]', '13')}}</td>
            <td>{{Form::checkbox('miercoles[]', '13')}}</td>
            <td>{{Form::checkbox('jueves[]', '13')}}</td>
            <td>{{Form::checkbox('viernes[]', '13')}}</td>
            <td>{{Form::checkbox('sabado[]', '13')}}</td>
          </tr>
          <tr>
            <td>14:00 - 15:00</td>
            <td>{{Form::checkbox('lunes[]', '14')}}</td>
            <td>{{Form::checkbox('martes[]', '14')}}</td>
            <td>{{Form::checkbox('miercoles[]', '14')}}</td>
            <td>{{Form::checkbox('jueves[]', '14')}}</td>
            <td>{{Form::checkbox('viernes[]', '14')}}</td>
            <td>{{Form::checkbox('sabado[]', '14')}}</td>
          </tr>
          <tr>
            <td>15:00 - 16:00</td>
            <td>{{Form::checkbox('lunes[]', '15')}}</td>
            <td>{{Form::checkbox('martes[]', '15')}}</td>
            <td>{{Form::checkbox('miercoles[]', '15')}}</td>
            <td>{{Form::checkbox('jueves[]', '15')}}</td>
            <td>{{Form::checkbox('viernes[]', '15')}}</td>
            <td>{{Form::checkbox('sabado[]', '15')}}</td>
          </tr>
          <tr>
            <td>16:00 - 17:00</td>
            <td>{{Form::checkbox('lunes[]', '16')}}</td>
            <td>{{Form::checkbox('martes[]', '16')}}</td>
            <td>{{Form::checkbox('miercoles[]', '16')}}</td>
            <td>{{Form::checkbox('jueves[]', '16')}}</td>
            <td>{{Form::checkbox('viernes[]', '16')}}</td>
            <td>{{Form::checkbox('sabado[]', '16')}}</td>
          </tr>
          <tr>
            <td>17:00 - 18:00</td>
            <td>{{Form::checkbox('lunes[]', '17')}}</td>
            <td>{{Form::checkbox('martes[]', '17')}}</td>
            <td>{{Form::checkbox('miercoles[]', '17')}}</td>
            <td>{{Form::checkbox('jueves[]', '17')}}</td>
            <td>{{Form::checkbox('viernes[]', '17')}}</td>
            <td>{{Form::checkbox('sabado[]', '17')}}</td>
          </tr>
          <tr>
            <td>18:00 - 19:00</td>
            <td>{{Form::checkbox('lunes[]', '18')}}</td>
            <td>{{Form::checkbox('martes[]', '18')}}</td>
            <td>{{Form::checkbox('miercoles[]', '18')}}</td>
            <td>{{Form::checkbox('jueves[]', '18')}}</td>
            <td>{{Form::checkbox('viernes[]', '18')}}</td>
            <td>{{Form::checkbox('sabado[]', '18')}}</td>
          </tr>
          <tr>
            <td>19:00 - 20:00</td>
            <td>{{Form::checkbox('lunes[]', '19')}}</td>
            <td>{{Form::checkbox('martes[]', '19')}}</td>
            <td>{{Form::checkbox('miercoles[]', '19')}}</td>
            <td>{{Form::checkbox('jueves[]', '19')}}</td>
            <td>{{Form::checkbox('viernes[]', '19')}}</td>
            <td>{{Form::checkbox('sabado[]', '19')}}</td>
          </tr>
          <tr>
            <td>20:00 - 21:00</td>
            <td>{{Form::checkbox('lunes[]', '20')}}</td>
            <td>{{Form::checkbox('martes[]', '20')}}</td>
            <td>{{Form::checkbox('miercoles[]', '20')}}</td>
            <td>{{Form::checkbox('jueves[]', '20')}}</td>
            <td>{{Form::checkbox('viernes[]', '20')}}</td>
            <td>{{Form::checkbox('sabado[]', '20')}}</td>
          </tr>
          <tr>
            <td>21:00 - 22:00</td>
            <td>{{Form::checkbox('lunes[]', '21')}}</td>
            <td>{{Form::checkbox('martes[]', '21')}}</td>
            <td>{{Form::checkbox('miercoles[]', '21')}}</td>
            <td>{{Form::checkbox('jueves[]', '21')}}</td>
            <td>{{Form::checkbox('viernes[]', '21')}}</td>
            <td>{{Form::checkbox('sabado[]', '21')}}</td>
          </tr>
        </tbody>
      </table>

</div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
