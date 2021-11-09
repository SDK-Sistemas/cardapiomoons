@extends('layouts.guest')

@section('content')

    <div class="tour_page right-sidebar">
{{--        <div class="bg-image" style="background-image: url({{ asset('storage/' . optional($prato->categoria->image)->path) }})">--}}

{{--        </div>--}}


        <div class="tour_page_head" style="background-image: url({{
                asset('storage/' . optional($prato->categoria->image)->path)
            }});">

            {{-- Breadcrumbs --}}
            <div class="breadcrumbs">
                <div class="wrap">
                </div>
            </div>
            {{-- /Breadcrumbs --}}

            {{-- Banner --}}
            <div class="header_content" id="head">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="top-info">
                            <p class="country">{{ $prato->categoria->name }}</p>
                            <h1 class="tour_title">
                                {{ $prato->name }}
                            </h1>
                            <div class="controls">
                                <div class="arrows" id="tour-head-slider-arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider_wrap">
                            <div class="slider lightgallery" id="tour-head-slider">
                                @foreach ($prato->images as $image)
                                    <a href="{{ asset('storage/' . $image->path) }}" class="slide">
                                        <img src="{{ asset('storage/' . $image->path) }}" alt="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="bottom-info">
                            <div class="bottom-info-right">
                                <div class="info">
                                    <div class="cost">R$ {{ $prato->price }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Banner --}}

        <div class="tour_page_body">
            <div class="wrap">
                <div class="wrap_float">

                    <div class="left_content">
                        <div class="overview js-section content-block" id="overview">
                            <h2 class="title">{{ __('Detalhes') }}</h2>
                            <p class="description">
                                {{ $prato->description }}
                            </p>
                        </div>
                    </div>

                    <div class="right_content sidebar">
                        <div class="navigation" id="sidebar-navigation">
                            <ul>
                                <li><a class="active" href="#head">{{ __('Foto') }} / {{ __('Video') }}</a></li>
                                <li><a href="#overview">{{ __('Detalhes') }}</a></li>
                            </ul>
                        </div>
                        <a class="book-now js-popup-open">
                            <span class="cost">R$ {{ $prato->price }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
