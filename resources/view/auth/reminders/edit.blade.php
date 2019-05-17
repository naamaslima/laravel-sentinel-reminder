@extends('auth.reminders.template')
@section('title')
    Recuperar Senha
@endsection
@section('content')

    <div class="passwordBox animated fadeInDown">
        <div class="text-center" style="margin-bottom: 30px">
            <img src="https://seeklogo.com/images/L/Lorem_Ipsum-logo-1662AFAE6D-seeklogo.com.png" alt="logo" >
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="ibox-content">
                    <h2 class="font-bold">Recuperação de Senha</h2>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" style="margin-bottom: 0px !important;">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">

                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('recuperar.senha.update', [$user->id, $token]) }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group has-feedback">
                                    <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="">
                                        <input id="email" type="email" placeholder="Digite seu email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="password" class="col-form-label text-md-right">{{ __('Nova senha') }}</label>

                                    <div class="">
                                        <input id="password" placeholder="Digite a nova senha" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirmar senha') }}</label>
                                    <div class="">
                                        <input id="password-confirm" placeholder="Repita a nova senha" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Enviar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <a href="{{"/"}}" title='Voltar' class="btn btn-link block full-width">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
