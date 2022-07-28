@extends('layouts.app')
@section('estilos')
    <link rel="stylesheet" href="{{ asset ('assets/css/Login-Form-Basic-icons.css') }}">
@endsection
@section('content')
<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row mb-5" style="margin-bottom: 30px;padding-bottom: 2px;margin-top: 10px;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold" style="font-family: 'Open Sans', sans-serif;font-size: 50px;font-weight: bold;color: #fff;">Login</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="margin-top: 2px;">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body text-center d-flex flex-column align-items-center" style="padding-left: 1px;padding-top: 6px;margin-bottom: -2px;padding-right: 6px;margin-right: -3px;">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: #2c2a2d;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                            </svg>
                        </div>
                        <form action="{{ route('login') }}"method="post">
                            @csrf
                            <div class="mb-3"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="mb-3"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="mb-3"><button class="btn btn-success d-block w-100" type="submit"  style="background: #2c2a2d;">Login</button></div>
                            @if (Route::has('password.request'))
                                    <a class="text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
