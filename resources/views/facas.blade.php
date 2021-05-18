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
            <div class="col-3">
                <img src="img/produtos/Facas/Autotronic_flip.png">
                <h4>Flip Knife Autotronic WW</h4>
                <p>R$ 1.200,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>

            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Black Laminate_gut.png">
                <h4>Gut Knife Black Laminate FT</h4>
                <p>R$ 585,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Blue Steel_skeleton.png">
                <h4>Skeleton Knife Blue Steel MW</h4>
                <p>R$ 3.900,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="img/produtos/Facas/Boreal Forest_nomad.png">
                <h4>Nomad Knife Boreal Forest FT</h4>
                <p>R$ 591,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Case Hardened_skeleton.png">
                <h4>Skeleton Knife Case Hardened FN</h4>
                <p>R$ 20.000,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Crimson Web_survival.png">
                <h4>Survival Knife Crimson Web FT</h4>
                <p>R$ 1.800,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="img/produtos/Facas/Damascus Steel_navaja.png">
                <h4>Navaja Knife Damascus Steel WW</h4>
                <p>R$ 430,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Doppler_karambit_9kdol.png">
                <h4>Karambit Doppler FN (Sapphire)</h4>
                <p>R$ 50.000,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Fade_nomad.png">
                <h4>Nomad Knife Fade MW</h4>
                <p>R$ 2.700,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="img/produtos/Facas/Freehand_m9.png">
                <h4>M9 Bayonet Freehand WW</h4>
                <p>R$ 2.300,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Lore_bayonet.png">
                <h4>Bayonet Lore MW</h4>
                <p>R$ 4.200,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Marble Fade_hustman.png">
                <h4>Huntsman Knife Marble Fade FN</h4>
                <p>R$ 1.600,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="img/produtos/Facas/Night_butterfly.png">
                <h4>Butterfly Knife Night FT</h4>
                <p>R$ 2.600,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Rust Coat_falchion.png">
                <h4>Falchion Knife Rust Coat BS</h4>
                <p>R$ 490,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/shadow_Vanilla.png">
                <h4>MShadow Daggers ★ (Vanilla)</h4>
                <p>R$ 795,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="img/produtos/Facas/Slaughter_paracord.png">
                <h4>Paracord Knife Slaughter FT</h4>
                <p>R$ 2.000.00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Stained_classic.png">
                <h4>Classic Knife Stained FT</h4>
                <p>R$ 755,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/stiletto_Rust Coat.png">
                <h4>Stiletto Knife Rust Coat WW</h4>
                <p>R$ 950,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="img/produtos/Facas/talon_Blue Steel.png">
                <h4>Talon Knife Blue Steel FT</h4>
                <p>R$ 1.850,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/Tiger Tooth_bowie.png">
                <h4>Bowie Knife Tiger Tooth MW</h4>
                <p>R$ 1.500,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>

            <div class="col-3">
                <img src="img/produtos/Facas/ursus_Ultraviolet.png">
                <h4>Ursus Knife Ultraviolet FN</h4>
                <p>R$ 5.600,00</p>
                <button class="cart" href="{{ route('carrinho') }}">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
</div>
@endsection
