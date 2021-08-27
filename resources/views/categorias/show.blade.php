@extends('layouts.guest')

@section('content')

    <div class="image_header" style="background-image: url({{ asset('storage/' . optional($categoria->image)->path) }})">
    </div>

    <div class="breadcrumbs white-color">
        <div class="wrap">
        </div>
    </div>

    <div class="page travel-list full-width full-width-image-header">
        <div class="page_head">
            <div class="wrap_float">
                <div class="wrap">
                    <div class="wrap_float">
                        <h1 class="title">
                            {{ $categoria->name }}
                        </h1>
                        <p class="subtitle">
                            {{ $categoria->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page_body">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="posts">
                        @foreach ($categoria->pratos as $prato)
                            <a href="{{ route('prato', [$categoria, $prato]) }}" class="tour_item"
                                style="background-image: url({{
                                    asset('storage/' . optional($prato->images->first())->path)
                                }});">
                                <div class="tour_item_bottom">
                                    <h3 class="_title">{{ $prato->title }}</h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            {{-- <div class="days">5 days |</div> --}}
                                            <div class="cost">R$ {{ $prato->price }}</div>
                                        </div>
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

@endsection
