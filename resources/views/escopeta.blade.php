@extends('layout.app')

@section('title', 'Escopeta')

@section('styles')
    <link rel="stylesheet" href="css/produtos.css">
@endsection

@section('content')
    <!--Escopeta-->
    <div class="produtos">
        <div class="small-container">
            <h2 class="titulo">Escopetas</h2>
            <div class="row">
                <div class="col-3">
                    <img src="img/produtos/Escopetas/Antique.png">
                    <h4>Nova Antique FT</h4>
                    <p>R$ 40,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Apocalypto.png">
                    <h4>Sawed-Off Apocalypto FN</h4>
                    <p>R$ 10,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Black Tie.png">
                    <h4>XM1014 Black Tie FT</h4>
                    <p>R$ 2,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Bloomstick.png">
                    <h4>Nova Bloomstick FT</h4>
                    <p>R$ 25,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Bulldozer.png">
                    <h4>MAG-7 Bulldozer FN</h4>
                    <p>R$ 1.200,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Candy Apple.png">
                    <h4>Nova Candy Apple MW</h4>
                    <p>R$ 1,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Cinquedea.png">
                    <h4>MAG-7 Cinquedea BS</h4>
                    <p>R$ 2.100,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Devourer.png">
                    <h4>Sawed-Off Devourer WW</h4>
                    <p>R$ 21,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Entombed.png">
                    <h4>XM1014 Entombed MW</h4>
                    <p>R$ 45,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Exo.png">
                    <h4>Nova Exo FN</h4>
                    <p>R$ 1,60</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Firestarter.png">
                    <h4>MAG-7 Firestarter FN</h4>
                    <p>R$ 17,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Hyper Beast.png">
                    <h4>Nova Hyper Beast FT</h4>
                    <p>R$ 40,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Incinegator.png">
                    <h4>XM1014 Incinegator MW</h4>
                    <p>R$ 63,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Justice.png">
                    <h4>MAG-7 Justice FT</h4>
                    <p>R$ 12,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Limelight.png">
                    <h4>Sawed-Off Limelight BS</h4>
                    <p>R$ 3,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Monster Call.png">
                    <h4>MAG-7 Monster Call FN</h4>
                    <p>R$ 15,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/SWAG-7.png">
                    <h4>MAG-7 SWAG-7 FT</h4>
                    <p>R$ 2,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/The Kraken.png">
                    <h4>Sawed-Off The Kraken  WW</h4>
                    <p>R$ 47,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Tranquility.png">
                    <h4>XM1014 Tranquility FT</h4>
                    <p>R$ 26,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/Wasteland Princess.png">
                    <h4>Sawed-Off Wasteland Princess MW</h4>
                    <p>R$ 20,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>

                <div class="col-3">
                    <img src="img/produtos/Escopetas/XOXO.png">
                    <h4>XM1014 XOXO FN</h4>
                    <p>R$ 210,00</p>
                    <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </div>
@endsection
