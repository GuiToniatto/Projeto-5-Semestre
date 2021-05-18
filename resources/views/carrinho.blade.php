@extends('layout.app')

@section('styles')
    <link rel="stylesheet" href="styles/carrinho.module.css" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="./js/carrinho.js"></script>
@endsection

@section('content')
    <div class="containerCart" id = "carrinho" onload="mostrarCarrinho();">

    </div>
    <div class = "containerTotal">
      <h2>Valor Total</h2>
      <p id = "valorTotal"></p>
    </div>
    <!--carrinho-->
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
@endsection
