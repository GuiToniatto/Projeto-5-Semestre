@extends('layout.app')

@section('content')
    <!--Carrossel-->
    <div class="carrosel">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="img/fire-serpent.jpg" alt="">
                </div>

                <div class="slide">
                    <img src="img/dragon-lore.jpg" alt="">
                </div>

                <div class="slide">
                    <img src="img/asiimov.jpg" alt="">
                </div>

                <div class="slide">
                    <img src="img/blaze.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    </div>

    <!--Mais vendidos-->

    <div class="mais_vend">
        <div class="small-container">
            <h2 class="titulo">Mais Vendidos</h2>
            <div class="row" id = "produtos-list">
                <!-- Injeta Script -->
            </div>
        </div>
    </div>
@endsection
