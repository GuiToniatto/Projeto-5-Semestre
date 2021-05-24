@extends('layout.app')

@section('title', 'Luvas')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Luvas</h2>
            <div class="row">
                @foreach ($luvas as $l)
                    <div class="col-3">
                        <img src="{{ @$l->image }}">
                        <h4>{{ @$l->title }}</h4>
                        <p>R$ {{ @$l->price }}</p>
                        <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
