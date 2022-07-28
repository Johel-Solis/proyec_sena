@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $docente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $docente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $docente->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $docente->area }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Docente:</strong>
                            {{ $docente->tipo_docente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Contrato:</strong>
                            {{ $docente->tipo_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $docente->estado }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $docente->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
