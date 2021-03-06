@extends('layout.app')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <link rel="stylesheet" href="{!! asset('sweet-alert/sweet-alert.css') !!}" />
@endsection

@section('content')
    <div id="login-container">
        <h1>Login</h1>

        <form action="{{ route('login') }}" method="post">
            {{csrf_field()}}
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu E-mail" autocomplete="off">

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite a sua Senha">

            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Login">
        </form>

        <div id="social-container">
        <p>Ou entre pelas suas redes sociais</p>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-linkedin"></i>
        </div>

        <div id="register-container">
        <p>Ainda não tem uma conta?</p>
        <a href="{{ route('registrar') }}" id="register">Registrar</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{!! asset('sweet-alert/sweet-alert.js') !!}"></script>
    <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script type="text/javascript">
        @if(session()->has('create'))
            swal("Sucesso", "Usuário criado com sucesso", "success")
        @elseif(session()->has('email_error'))
            swal("Erro", "E-mail informado está incorreto", "error")
        @elseif(session()->has('pass_error'))
            swal("Erro", "Senha informada está incorreta", "error")
        @endif
    </script>
@endsection
