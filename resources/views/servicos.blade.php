@extends('layout.app')

@section('title', 'Servicos')

@section('styles')
    <link rel = "stylesheet" href="css/header.css">
@endsection

@section('content')
    <div class="header">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="img/lan_house.jpeg">
                    <h4>Lan-House</h4>
                    <p align="justify">Equipadas com computadores de máxima qualidade <br>
                        e peças de última geração.Contando com processadores <br>
                        Intel Core i7-10700K, placas de vídeo Nvidia Geforce RTX 2070,<br>
                        memórias RAM de 16GB e todos equipados com SSD.</p>
                </div>

                <div class="col-3">
                    <img src="img/campeonato.jpeg">
                    <h4>Campeonatos</h4>
                    <p>Aqui você pode marcar aquele campeonato com seus<br>
                        amigos para ver qual dos times é melhor e concorrer<br>
                        à prêmios.</p>
                </div>

                <div class="col-3">
                    <img src="img/streaming.jpeg">
                    <h4>Streaming</h4>
                    <p >Temos servidores rodando o famoso jogo Counter - Strike <br>
                        24 horas por dia para você jogar onde estiver pelo seu <br>
                        navegador. Não precisa mais ter aquele computador <br>
                        bacana para rodar os games. Tudo isso por um valor mensal.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
