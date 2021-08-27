@extends('layouts.guest')

@section('content')

    <x-banner-slider :banners="$banners">
    </x-banner-slider>

    <x-popular :pratos="$pratos">
    </x-popular>

    @if($stories->isEmpty() === false)
        <x-stories :stories="$stories">
        </x-stories>
    @endif

@endsection
