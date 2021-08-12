<div class="top_panel">
    <div class="wrap">
        <div class="wrap_float">

            <x-select-locale></x-select-locale>

            <div class="left">
                <div class="search_btn"></div>
                <a href="/" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="menu_wrap" id="menu_wrap">
                <div class="scroll">
                    <div class="center">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="/">
                                        <span>
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cardapio') }}">
                                        <span>
                                            Cardápio
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>
                                            Quem Somos
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>
                                            Contato
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <span>
                                            Reservas
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
                                    <a href="#" class="link facebook"><span></span></a>
                                    <a href="#" class="link instagram"><span></span></a>
                                    <a href="#" class="link pinterest"><span></span></a>
                                    <a href="#" class="link twitter"><span></span></a>
                                    <a href="#" class="link youtube"><span></span></a>
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
