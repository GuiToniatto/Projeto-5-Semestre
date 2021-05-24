@extends('layout.app')

@section('title', 'Sub')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Sub-Metralhadoras</h2>
            <div class="row">
                @foreach ($subs as $s)
                    <div class="col-3">
                        <img src="{{ @$s->image }}">
                        <h4>{{ @$s->title }}</h4>
                        <p>R$ {{ @$s->price }}</p>
                        <button class="cart" href="carrinho.html">Adicionar ao Carrinho</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
