@extends('layouts.guest')

@section('content')

    <div class="breadcrumbs">
        <div class="wrap">
        </div>
    </div>

    <div class="page about-us-page">
        <div class="about-us">
            <div class="wrap">
                <div class="wrap_float">
                    <h1 class="title">{{ __('Reservas') }}</h1>
                    <p class="text">
                        {{ __('Você pode fazer sua reserva diretamente pelo nosso sistema e já garantir sua mesa para o horário desejado, de forma simples e prática. Basta clicar no botão abaixo e será direcionado para para a tela de reservas.') }}
                    </p>
                    <div style="display: flex; justify-content: center; margin-bottom: 120px">
                        <button class="btn_reserva getin-widget-button" data-partner="xkKM3B1w">
                            {{ __('Fazer Reserva') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script async type="text/javascript" src="https://widget.getinapp.com.br/loader.js"></script>

@endsection
