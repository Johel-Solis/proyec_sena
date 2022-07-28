@extends('layouts.app')

@section('template_title')
    {{ $hora->name ?? 'Show Hora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Hora Formato 24:</strong>
                            {{ $hora->hora_formato_24 }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Id:</strong>
                            {{ $hora->dia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
