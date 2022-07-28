@extends('layouts.app')
@section('estilos')
<link rel="stylesheet" href="{{ asset ('assets/css/Bootstrap-4---Payment-Form.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Contact-form.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Login-Form-Basic-icons.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/PHP-Contact-Form-dark-contact.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/PHP-Contact-Form-dark.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Responsive-Form-Contact-Form-Clean.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Responsive-Form.css') }}">

@endsection
@section('scripts')
    <script src="{{ asset ('assets/js/Bootstrap-4---Payment-Form.js') }}"></script>
    <script src="{{ asset ('assets/js/PHP-Contact-Form-dark-1.js') }}"></script>
    <script src="{{ asset ('assets/js/PHP-Contact-Form-dark.js') }}"></script>
@endsection
@section('template_title')
    Adicionar Ambiente
@endsection

@section('content')
    <section class=" container">
        <div class="form-group justify-content-center align-items-center align-content-center align-self-center" style="margin-top: 25px;">
            <div class="form-group justify-content-center align-items-center align-content-center align-self-center">

                @includeif('partials.errors')

                <div class="justify-content-center align-items-center align-content-center align-self-center mr-5 ml-5" id="formdiv" style="background: #ffffff;">
                    <div class="card-header  form-row justify-content-center align-items-center align-content-center align-self-center" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                        <span class="card-title">Adicionar Ambiente</span>
                    </div>
                    <div class=" justify-content-center align-items-center align-content-center align-self-center align-items-sm-center" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                    <div class="card-body justify-content-center align-items-center align-content-center align-self-center">
                        <form method="POST" action="{{ route('ambientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ambiente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
