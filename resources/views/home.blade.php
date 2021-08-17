@extends('layouts.guest')

@section('content')

    <x-banner-slider :banners="$banners">
    </x-banner-slider>

    <x-popular>
    </x-popular>

    <x-stories>
    </x-stories>

    <x-newsletter>
    </x-newsletter>

@endsection
