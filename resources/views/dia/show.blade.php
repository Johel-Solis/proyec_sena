@extends('layouts.app')

@section('template_title')
    {{ $dia->name ?? 'Show Dia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $dia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $dia->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Id:</strong>
                            {{ $dia->horario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
