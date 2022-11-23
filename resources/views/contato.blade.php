@extends('layouts.guest')

@section('content')

    <div class="breadcrumbs">
        <div class="wrap">
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                    <h1 class="title">
                        {{ __('Fale com nossa equipe') }}
                    </h1>
                    <p class="subtitle">
                        {{ __('Se você tem uma sugestão ou reclamação manda pra gente por aqui.') }}
                    </p>
                </div>
                <div class="page_body">

                    <div class="contacts-left">
                        <div class="tel" style="width: 100%">
                            <a href="tel:551434362310">(14) 3436 2310</a>
                        </div>
                        <div class="email" style="font-size: 10px">
                            <a href="mailto:HB6V7-FB@accor.com"
                                style="font-size: 18px">HB6V7-FB@accor.com</a>
                        </div>
                        <p class="address">
                            Avenida Marechal Castelo Branco, 55 - CEP: 18.683-430
                        </p>
                        <div class="socials social-links" style="justify-content: flex-start">
                            <a href="instagram.com/moons.restaurante" class="link facebook"
                                target="_blank"><span></span></a>
                            <a href="facebook.com/moons.restaurante" class="link instagram"
                                target="_blank"><span></span></a>
                        </div>
                    </div>

                    <div class="contacts-right">
                        <div class="map">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                        scrolling="no" marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?width=717&amp;height=455&amp;hl=en&amp;q=18683-430&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        width: 100%;
                                        height: 455px;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        width: 100%;
                                        height: 455px;
                                    }

                                    .gmap_iframe {
                                        height: 455px !important;
                                    }

                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
