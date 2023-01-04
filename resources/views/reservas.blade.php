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
                        {{ __('Faça sua reserva ligando pra gente e garanta sua mesa para o horário desejado, de forma simples e prática. Clique no botão abaixo pra ligar.') }}
                    </p>
                    <div style="display: flex; justify-content: center; margin-bottom: 120px">
                        <a role="button" href="tel:+551434362310" class="btn_reserva getin-widget-button">
                            {{ __('Ligar') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
