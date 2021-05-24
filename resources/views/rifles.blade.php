@extends('layout.app')

@section('title', 'Rifles')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Rifles</h2>
            <div class="row">
                @foreach ($rifles as $r)
                    <div class="col-3">
                        <img src="{{ @$r->image }}">
                        <h4>{{ @$r->title }}</h4>
                        <p>R$ {{ @$r->price }}</p>
                        <button class="cart" href="carrinho.html">Adicionar ao Carrinho</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
