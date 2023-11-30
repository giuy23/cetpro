@extends('layouts.app', ['class' => 'login-page', 'page' => __('Restablecer Contraseña'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">

        <form class="form" method="post" action="{{ route('password.update') }}">
            @csrf

            <div class="card card-login d-flex align-text-center align-content-center p-4">
                <div class=" text-center">
                    {{-- <img src="{{ asset('black') }}/img/card-primary.png" alt=""> --}}
                    <h4 class="text-white">{{ __('Recuperar Contraseña') }}</h4>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña') }}">
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">{{ __('
                        Restablecer Contraseña') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
