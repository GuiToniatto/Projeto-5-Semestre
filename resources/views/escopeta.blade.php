@extends('layout.app')

@section('title', 'Escopeta')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Escopetas</h2>
            <div class="row">
                @foreach($escopeta as $e)
                    <div class="col-3">
                        <img src="{{ @$e->image }}">
                        <h4>{{ @$e->title }}</h4>
                        <p>R$ {{ @$e->price }}</p>
                        <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
