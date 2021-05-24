@extends('layout.app')

@section('title', 'Registrar')

@section('styles')
    <link rel="stylesheet" href="css/registrar.css">
@endsection

@section('content')
<div id="cad-container">
    <form action="{{ route('guardar') }}"
        class="form-validar form-horizontal" method="post">
        {{csrf_field()}}
        <h1>Cadastre-se</h1>
        <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
        </div>

        <div class="half-box spacing">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
        </div>

        <div class="half-box">
            <label for="lastname">Sobrenome</label>
            <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" required>
        </div>

        <div class="half-box spacing">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
        </div>

        <div class="half-box">
            <label for="passconfirmation">Confirmar senha</label>
            <input type="password" name="passconfirmation" id="passconfirmation"
                placeholder="Confirme a sua senha" required>
        </div>

        <div class="full-box">
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" id="agreement">Eu li e aceito os <a href="#">termos de uso</a> </label>
        </div>

        <div class="full-box">
            <button class="btn btn-primary btn-submit" type="submit">Registrar</button>
        </div>
    </form>
  </div>
  <p class="error-validation template"></p>
@endsection

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\RegisterRequest', '.form-validar') !!}
@endsection
