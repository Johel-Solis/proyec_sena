@extends('layouts.app')
@section('estilos')
<link rel="stylesheet"href="{{ asset ('assets/css/styleH.css') }}"/>
@endsection

@section('template_title')
    {{ $horario->name ?? 'Ver Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cantidad Horas:</strong>
                            {{ $horario->cantidad_horas }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo Academico :</strong>
                            {{ $periodoAcademico[0] }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia :</strong>
                            {{ $competencia[0] }}
                        </div>
                        <div class="form-group">
                            <strong>Docente :</strong>
                            {{ $docente[0] }}
                        </div>
                        <div class="form-group">
                            <strong>Ambiente :</strong>
                            {{ $ambiente[0] }}
                        </div>


                        <div class="form-group">
                            <table style=" padding-top = 20px">

                                <thead>
                                  <th>HORA</th>
                                  <th>Lunes</th>
                                  <th>Martes</th>
                                  <th>Miercoles</th>
                                  <th>Jueves</th>
                                  <th>Viernes</th>
                                  <th>Sabado</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>7:00 - 8:00</td>
                                    <td><input type="checkbox" id='Lunes7' disabled></td>
                                    <td><input type="checkbox" id='Martes7'disabled></td>
                                    <td><input type="checkbox" id='Miercoles7'disabled></td>
                                    <td><input type="checkbox" id='Jueves7'disabled></td>
                                    <td><input type="checkbox" id='Viernes7'disabled></td>
                                    <td><input type="checkbox" id='Sabado7'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>8:00 - 9:00</td>
                                    <td><input type="checkbox" id='Lunes8'disabled></td>
                                    <td><input type="checkbox" id='Martes8'disabled></td>
                                    <td><input type="checkbox" id='Miercoles8'disabled></td>
                                    <td><input type="checkbox" id='Jueves8'disabled></td>
                                    <td><input type="checkbox" id='Viernes8'disabled></td>
                                    <td><input type="checkbox" id='Sabado8'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>9:00 - 10:00</td>
                                    <td><input type="checkbox" id='Lunes9'disabled></td>
                                    <td><input type="checkbox" id='Martes9'disabled></td>
                                    <td><input type="checkbox" id='Miercoles9'disabled></td>
                                    <td><input type="checkbox" id='Jueves9'disabled></td>
                                    <td><input type="checkbox" id='Viernes9'disabled></td>
                                    <td><input type="checkbox" id='Sabado9'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>10:00 - 11:00</td>
                                    <td><input type="checkbox" id='Lunes10'disabled></td>
                                    <td><input type="checkbox" id='Martes10'disabled></td>
                                    <td><input type="checkbox" id='Miercoles10'disabled></td>
                                    <td><input type="checkbox" id='Jueves10'disabled></td>
                                    <td><input type="checkbox" id='Viernes10'disabled></td>
                                    <td><input type="checkbox" id='Sabado10'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>11:00 - 12:00</td>
                                    <td><input type="checkbox" id='Lunes11'disabled></td>
                                    <td><input type="checkbox" id='Martes11'disabled></td>
                                    <td><input type="checkbox" id='Miercoles11'disabled></td>
                                    <td><input type="checkbox" id='Jueves11'disabled></td>
                                    <td><input type="checkbox" id='Viernes11'disabled></td>
                                    <td><input type="checkbox" id='Sabado11'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>12:00 - 13:00</td>
                                    <td><input type="checkbox" id='Lunes12'disabled></td>
                                    <td><input type="checkbox" id='Martes12'disabled></td>
                                    <td><input type="checkbox" id='Miercoles12'disabled></td>
                                    <td><input type="checkbox" id='Jueves12'disabled></td>
                                    <td><input type="checkbox" id='Viernes12'disabled></td>
                                    <td><input type="checkbox" id='Sabado12'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>13:00 - 14:00</td>
                                    <td><input type="checkbox" id='Lunes13'disabled></td>
                                    <td><input type="checkbox" id='Martes13'disabled></td>
                                    <td><input type="checkbox" id='Miercoles13'disabled></td>
                                    <td><input type="checkbox" id='Jueves13'disabled></td>
                                    <td><input type="checkbox" id='Viernes13'disabled></td>
                                    <td><input type="checkbox" id='Sabado13'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>14:00 - 15:00</td>
                                    <td><input type="checkbox" id='Lunes14'disabled></td>
                                    <td><input type="checkbox" id='Martes14'disabled></td>
                                    <td><input type="checkbox" id='Miercoles14'disabled></td>
                                    <td><input type="checkbox" id='Jueves14'disabled></td>
                                    <td><input type="checkbox" id='Viernes14'disabled></td>
                                    <td><input type="checkbox" id='Sabado14'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>15:00 - 16:00</td>
                                    <td><input type="checkbox" id='Lunes15'disabled></td>
                                    <td><input type="checkbox" id='Martes15'disabled></td>
                                    <td><input type="checkbox" id='Miercoles15'disabled></td>
                                    <td><input type="checkbox" id='Jueves15'disabled></td>
                                    <td><input type="checkbox" id='Viernes15'disabled></td>
                                    <td><input type="checkbox" id='Sabado15'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>16:00 - 17:00</td>
                                    <td><input type="checkbox" id='Lunes16'disabled></td>
                                    <td><input type="checkbox" id='Martes16'disabled></td>
                                    <td><input type="checkbox" id='Miercoles16'disabled></td>
                                    <td><input type="checkbox" id='Jueves16'disabled></td>
                                    <td><input type="checkbox" id='Viernes16'disabled></td>
                                    <td><input type="checkbox" id='Sabado16'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>17:00 - 18:00</td>
                                    <td><input type="checkbox" id='Lunes17'disabled></td>
                                    <td><input type="checkbox" id='Martes17'disabled></td>
                                    <td><input type="checkbox" id='Miercoles17'disabled></td>
                                    <td><input type="checkbox" id='Jueves17'disabled></td>
                                    <td><input type="checkbox" id='Viernes17'disabled></td>
                                    <td><input type="checkbox" id='Sabado17'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>18:00 - 19:00</td>
                                    <td><input type="checkbox" id='Lunes18'disabled></td>
                                    <td><input type="checkbox" id='Martes18'disabled></td>
                                    <td><input type="checkbox" id='Miercoles18'disabled></td>
                                    <td><input type="checkbox" id='Jueves18'disabled></td>
                                    <td><input type="checkbox" id='Viernes18'disabled></td>
                                    <td><input type="checkbox" id='Sabado18'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>19:00 - 20:00</td>
                                    <td><input type="checkbox" id='Lunes19'disabled></td>
                                    <td><input type="checkbox" id='Martes19'disabled></td>
                                    <td><input type="checkbox" id='Miercoles19'disabled></td>
                                    <td><input type="checkbox" id='Jueves19'disabled></td>
                                    <td><input type="checkbox" id='Viernes19'disabled></td>
                                    <td><input type="checkbox" id='Sabado19'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>20:00 - 21:00</td>
                                    <td><input type="checkbox" id='Lunes20'disabled></td>
                                    <td><input type="checkbox" id='Martes20'disabled></td>
                                    <td><input type="checkbox" id='Miercoles20'disabled></td>
                                    <td><input type="checkbox" id='Jueves20'disabled></td>
                                    <td><input type="checkbox" id='Viernes20'disabled></td>
                                    <td><input type="checkbox" id='Sabado20'disabled></td>
                                  </tr>
                                  <tr>
                                    <td>21:00 - 22:00</td>
                                    <td><input type="checkbox" id='Lunes21'disabled></td>
                                    <td><input type="checkbox" id='Martes21'disabled></td>
                                    <td><input type="checkbox" id='Miercoles21'disabled></td>
                                    <td><input type="checkbox" id='Jueves21'disabled></td>
                                    <td><input type="checkbox" id='Viernes21'disabled></td>
                                    <td><input type="checkbox" id='Sabado21'disabled></td>
                                  </tr>
                                </tbody>
                              </table>
                              @foreach ($dias as $dia)

                              <script>
                                var miCheckbox = document.getElementById('{{$dia->nombre}}{{$dia->hora}}');
                                miCheckbox.checked = true;



                              </script>
                              @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
