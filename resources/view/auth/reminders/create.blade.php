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
                    <p>Você receberá um link para recuperação de senha</p>
                    @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" style="margin-bottom: 0">
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
                            <form class="m-t" role="form" method="POST" action="{{ route('recuperar.senha.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Digite seu email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Enviar</button>
                            </form>
                            <a href="{{"/"}}" title='Voltar' class="btn btn-link block full-width">Voltar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
