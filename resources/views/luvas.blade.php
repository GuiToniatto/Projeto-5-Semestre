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
                <div class="col-3">
                    <img src="img/produtos/Luvas/Amphibious.png">
                    <h4>Sport Gloves Amphibious WW</h4>
                    <p>R$ 3.800,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>

                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Black Tie.png">
                    <h4>Driver Gloves Black Tie FT</h4>
                    <p>R$ 2.000,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Boom!.png">
                    <h4>Moto Gloves Boom! MW</h4>
                    <p>R$ 3.700,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="img/produtos/Luvas/Bronze Morph.png">
                    <h4>Sport Gloves Bronze Morph FT</h4>
                    <p>R$ 1.100,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/CAUTION!.png">
                    <h4>Hand Wraps CAUTION! FT</h4>
                    <p>R$ 3.100,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Crimson Kimono.png">
                    <h4>Specialist Gloves Crimson Kimono FT</h4>
                    <p>R$ 6.400,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="img/produtos/Luvas/Duct Tape.png">
                    <h4>Hand Wraps Duct Tape WW</h4>
                    <p>R$ 520,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Emerald Web.png">
                    <h4>Specialist Gloves Emerald Web BS</h4>
                    <p>R$ 1.500,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Emerald.png">
                    <h4>Hydra Gloves Emerald FT</h4>
                    <p>R$ 570,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="img/produtos/Luvas/Fade.png">
                    <h4>Specialist Gloves Fade WW</h4>
                    <p>R$ 2.000,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Giraffe.png">
                    <h4>Hand Wraps Giraffe WW</h4>
                    <p>R$ 1.200,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Pandora's Box.png">
                    <h4>Sport Gloves Pandora's Box BS</h4>
                    <p>R$ 5.300,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <img src="img/produtos/Luvas/Racing Green.png">
                    <h4>Driver Gloves Racing Green FT</h4>
                    <p>R$ 380,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Snow Leopard.png">
                    <h4>Driver Gloves Snow Leopard FT</h4>
                    <p>R$ 7.600,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Luvas/Spearmint.png">
                    <h4>Moto Gloves Spearmint WW</h4>
                    <p>R$ 4.900,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </div>
@endsection
