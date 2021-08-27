@extends('layouts.guest')

@section('content')

    <div class="breadcrumbs white-color">
        <div class="wrap">
        </div>
    </div>
    <div class="gallery-page gallery-single-page">
        <div class="wrap">
            <div class="wrap_float">
                <div class="gallery-page-head">
                    <h1 class="title">
                        {{ __('Diferente por natureza') }}
                    </h1>
                    <div class="subtitle">
                        <p>
                            {{ __('O moons chegou para oferecer ao público uma experiência digna dos grandes centros urbanos. A culinária Fusion mistura ingredientes e sabors') }}
                        </p>
                    </div>
                </div>
                <div class="gallery-page-body">
                    <div class="image-list lightgallery">
                        <a href="{{asset('storage/quem-somos/1.png')}}" class="image-item">
                            <img src="{{asset('storage/quem-somos/1.png')}}" alt="">
                        </a>
                        <a href="{{asset('storage/quem-somos/2.png')}}" class="image-item">
                            <img src="{{asset('storage/quem-somos/2.png')}}" alt="">
                        </a>
                        <a href="{{asset('storage/quem-somos/3.png')}}" class="image-item">
                            <img src="{{asset('storage/quem-somos/3.png')}}" alt="">
                        </a>
                        <a href="{{asset('storage/quem-somos/4.png')}}" class="image-item">
                            <img src="{{asset('storage/quem-somos/4.png')}}" alt="">
                        </a>
                        <a href="{{asset('storage/quem-somos/5.png')}}" class="image-item">
                            <img src="{{asset('storage/quem-somos/5.png')}}" alt="">
                        </a>
                        <a href="{{asset('storage/quem-somos/6.png')}}" class="image-item">
                            <img src="{{asset('storage/quem-somos/6.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
