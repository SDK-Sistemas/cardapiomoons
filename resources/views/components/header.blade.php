<div class="top_panel @if (in_array(Route::currentRouteName(), ['cardapio', 'contato', 'reservas'])) inversion @endif">
    <div class="wrap">
        <div class="wrap_float">

            <x-select-locale></x-select-locale>

            <div class="left">
                {{-- <div class="search_btn"></div> --}}
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/logo.png')}}" alt="">
                </a>
            </div>
            <div class="menu_wrap" id="menu_wrap">
                <div class="scroll">
                    <div class="center">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">
                                        <span>
                                            {{ __('Home') }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cardapio') }}"
                                        class="{{ Route::is('cardapio') ? 'active' : '' }}">
                                        <span>
                                            {{ __('Cardápio') }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{ route('quem-somos') }}"
                                        class="{{ Route::is('quem-somos') ? 'active' : '' }}">
                                        <span>
                                            {{ __('Quem Somos') }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{ route('contato') }}"
                                        class="{{ Route::is('contato') ? 'active' : '' }}">
                                        <span>
                                            {{ __('Contato') }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('reservas') }}"
                                        class="{{ Route::is('reservas') ? 'active' : '' }}">
                                        <span>
                                            {{ __('Reservas') }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('bar') }}"
                                        class="{{ Route::is('bar')  ? 'active' : '' }}">
                                        <span>
                                            {{ __('Bar')  }}
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            {{-- Menu mobile --}}
                            <div class="mobile_content">

                                <x-select-locale-mobile>
                                </x-select-locale-mobile>

                                <div class="tel">
                                    <a href="tel:+5501434362310">(14) 3436 2310</a>
                                </div>
                                <div class="social">

                                    <a href="https://www.facebook.com/moons.restaurante" class="link facebook"
                                        target="_blank"><span></span></a>
                                    <a href="https://www.instagram.com/moons.restaurante" class="link instagram"
                                        target="_blank"><span></span></a>

                                </div>
                            </div>
                            {{-- /Menu mobile --}}

                        </div>
                        <div class="close" id="menu-close">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="right">
                        <div class="tel">
                            <a href="tel:+5501434362310">
                                (14) 3436 2310
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile_btn" id="mobile_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
