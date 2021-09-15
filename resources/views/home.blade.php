@extends('layouts.guest')

@section('content')

    <!-- Banner -->
    <div class="main_slider js_height">
        <div class="slider_wrap" id="main_slider_wrap">
            @foreach ($banners as $banner)
                <div class="slide">
                    <div class="bg-img" style="background-image: url({{ asset('storage/'.optional($banner->image)->path) }});"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap">
                                    @if($banner->tagline)
                                        <p class="country">{{ $banner->tagline }}</p>
                                    @endif
                                    <h2 class="slide_title">{{ $banner->title }}</h2>
                                </div>
                                <p class="text">
                                    {{ $banner->text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="arrows">
            <div class="arrow prev"></div>
            <div class="arrow next"></div>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Pratos -->
    <div class="most_popular">
        <div class="wrap">
            <div class="wrap_float">
                <div class="title_wrap">
                    <h2 class="title">{{ __('Nossos Pratos') }}</h2>
                    <p class="subtitle">
                        {{ __('A cada escolha, uma experiência inesquecível') }}
                    </p>
                    <div class="controls">
                        <a href="{{ route('cardapio') }}" class="link">{{ __('Ver todos') }}</a>
                        <div class="arrows">
                            <div class="arrow prev"></div>
                            <div class="arrow next"></div>
                        </div>
                    </div>
                </div>
                <div class="section_content">
                    <div class="tour-slider" id="tour-slider">
                        @foreach ($pratos as $prato)
                            <x-card href="{{ route('prato', [$prato->categoria, $prato]) }}"
                                    background="{{ asset('storage/' . optional($prato->images->first())->path) }}">
                                <x-slot name="subtitle">
                                    {{ $prato->categoria->name }}
                                </x-slot>
                                <x-slot name="title">
                                    {{ $prato->name }}
                                </x-slot>
                                {{ $prato->subtitle }}
                            </x-card>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Pratos -->

    <!-- Stories -->
    @if($stories->isEmpty() === false)
        <div class="stories">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">{{ __('Pelo olhar dos clientes') }}</h2>
                        <p class="subtitle">
                            {{ __('As fotos neste espaço foram tiradas pelos nossos clientes,
                            atestando a experiência Moons.') }}
                        </p>
                        <div class="controls">
                            <a href="stories-right-sidebar.html" class="link">{{ __('Ver mais') }}</a>
                            <div class="arrows">
                                <div class="arrow prev"></div>
                                <div class="arrow next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section_content">
                        <div class="stries_slider" id="stries_slider">
                            @foreach ($stories as $storie)
                                <a href="#" class="story_item"
                                   style="background-image: url({{ asset('storage/' . $storie->image->path) }});">
                                    <div class="item_wrap">
                                        <div class="_content">
                                            <h3 class="country">
                                                {{ $storie->title }}
                                            </h3>
                                            <p class="text">
                                                {{ $storie->subtitle }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="shadow js-shadow"></div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- /Stories -->

@endsection
