@extends('layout.app')

@section('title', 'Facas')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Facas</h2>
                <div class="row">
                    @foreach($facas as $f)
                        <div class="col-3">
                            <img src="{{ @$f->image }}">
                            <h4>{{ @$f->title }}</h4>
                            <p>R$ {{ @$f->price }}</p>
                            <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
