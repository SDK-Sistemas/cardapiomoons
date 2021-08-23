@extends('layouts.guest')

@section('content')

    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">

            </div>
        </div>
    </div>

    <div class="page travel-list right-sidebar">
        <div class="page_head">
            <div class="wrap_float">
                <div class="wrap">
                    <div class="wrap_float">
                        <h1 class="title">
                            {{ __('Cárdapio') }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_body">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="left_content">
                        <div class="posts">
                            @foreach ($categorias as $categoria)
                                <a href="{{ route('categoria', $categoria) }}" class="item">
                                    <div class="item_left">
                                        <div class="image"
                                            style="background-image: url({{ asset('storage/' . optional($categoria->image)->path) }})">
                                            <div class="shadow js-shadow"></div>
                                        </div>
                                    </div>
                                    <div class="item_right">
                                        <h3 class="item_title">
                                            {{ $categoria->title }}
                                        </h3>
                                        <p class="item_text">
                                            {{ $categoria->description }}
                                        </p>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                    <div class="right_content sidebar">
                        <div class="_block">
                            <h4 class="block_title">Stories</h4>
                            <div class="stories">
                                <div class="arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                                <div class="items" id="stories-slider">
                                    @foreach ($stories as $storie)
                                        <a href="story.html" class="item"
                                            style="background-image: url({{ asset('storage/' . $storie->image->path) }})">
                                            <h5 class="_title">{{ $storie->title }}</h5>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
