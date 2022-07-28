@extends('layouts.app')
@section('scripts')

<script>

    function ValidarFechas()
    {
       var fechainicial = document.getElementById("fecha_inicial").value;
       var fechafinal = document.getElementById("fecha_final").value;
            var tipo = document.getElementById("tipo").value;
            var fecha1 = moment(fechainicial);
            var fecha2 = moment(ffechafinal);


            if(Date.parse(fechafinal) < Date.parse(fechainicial)) {

            alert("La fecha final debe ser mayor a la fecha inicial");
            }
            if(tipo== '3'){
                if(fecha2.diff(fecha1, 'days') > 90 )   {
                    alert('El periodo no puede ser mayor a 90 dias');
                }
            }else if(tipo== '6'){
                if(fecha2.diff(fecha1, 'days') > 180 )   {
                    alert('El periodo no puede ser mayor a 180 dias');
                }

            }
        }
    </script>
@endsection


@section('template_title')
    Create Periodo Academico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Periodo Academico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('periodo-academicos.store') }}"  role="form" enctype="multipart/form-data" onsubmit="ValidarFechas()";>
                            @csrf

                            @include('periodo-academico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
