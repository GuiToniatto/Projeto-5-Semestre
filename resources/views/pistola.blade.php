@extends('layout.app')

@section('title', 'Pistola')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Pistolas</h2>
            <div class="row">
                @foreach ($pistolas as $p)
                    <div class="col-3">
                        <img src="{{ @$p->image }}">
                        <h4>{{ @$p->title }}</h4>
                        <p>R$ {{ @$p->price }}</p>
                        <button class="cart" href="carrinho.html">Adicionar ao Carrinho</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
