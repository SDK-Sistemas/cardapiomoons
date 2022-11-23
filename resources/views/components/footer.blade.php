<div class="footer">
    <div class="wrap">
        <div class="wrap_float">
            <div class="footer_top">
                <div class="left">
                    <div class="col">
                        <div class="_title m_title">{{ __('Links Rápidos') }}</div>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    <span>
                                        {{ __('Home') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cardapio') }}">
                                    <span>
                                        {{ __('Cardápio') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('quem-somos') }}">
                                    <span>
                                        {{ __('Quem Somos') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('contato') }}">
                                    <span>
                                        {{ __('Contato') }}
                                    </span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('reservas') }}">
                                    <span>
                                        {{ __('Reservas') }}
                                    </span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <link href="https://awards.infcdn.net/transparent_v3.css" rel="stylesheet"/>
                    <style type="text/css"> polygon, .st0{fill:#fff !important;} </style>
                    <div id="aw_transp" class="aw_transp_black st0" onclick="if(event.target.nodeName.toLowerCase() != 'a') {window.open(this.querySelector('.aw_name').href);return 0;}"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 113" style="enable-background:new 0 0 90 113;" xml:space="preserve" preserveAspectRatio="none" class="aw_svg">  <polygon style="fill: #fff" points="61.8,31.7 61.8,31.7 61.8,31.7 "/> <path class="st0" d="M87.2,10.5C82.5,2.6,56,0,44.7,0C33.3,0,6.8,2.6,2.1,10.5C-2.5,18.2,1.8,75.9,2,78.3c0,0.2,0.1,6.1,5.3,11.2	c4.4,4.3,23.6,20.8,37.2,23.8l0.2,0l0.2,0c13.5-3,32.8-19.6,37.2-23.8c5.2-5.1,5.3-11,5.3-11.1C87.5,75.9,91.8,18.2,87.2,10.5z M44.7,111.5c-13-3-32.1-19.4-36.1-23.3c-4.7-4.5-4.7-9.8-4.8-10C2.6,61.7,0.1,17.4,3.7,11.4c4.1-6.8,28.7-9.6,41-9.6	c12.3,0,36.9,2.8,41,9.6c3.6,6,1.1,50.2-0.1,66.9c0,0.1-0.1,5.4-4.7,9.9C76.7,92.1,57.6,108.5,44.7,111.5z"/></svg> <div class="aw-arc "> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300px" height="300px" viewBox="0 0 300 300"> <defs> <path id="rest-aw-arc" d="M 30 150 a 120 120 0 1 1 240 0"></path> </defs> <text class="aw_arc-heading st0" fill="#fff" text-anchor="middle"> <textPath startOffset="50%" xlink:href="#rest-aw-arc">Recomendado</textPath> </text> </svg> </div> <div class="aw_year" style="margin-left: 30px; color: white !important; background-color: white !important">2022</div> <a href="https://pt.restaurantguru.com/Moons-Restaurante-Lencois-Paulista" class="aw_name" target="_blank" style="color: white !important;">Moons Restaurante</a> <a href="https://restaurantguru.com" class="aw-r_bot" target="_blank" style="color: white !important;">Restaurant Guru</a></div>
                </div>
                <div class="right">
                    <div class="_title">{{ __('Contato') }}</div>
                    <div class="contacts_info">
                        <div class="tel">
                            <a href="tel:+5501434362310">
                                (14) 3436 2310
                            </a>
                        </div>
                        {{-- <div class="email">
                            <a href="mailto:contato@moonsrestaurante.com.br">contato@moonsrestaurante.com.br</a>
                        </div> --}}
                        <div class="address">
                            Avenida Marechal Castelo Branco, 55 - CEP: 18.683-430
                        </div>
                    </div>
                    <div class="socials social-links">
                        <a href="https://www.facebook.com/moons.restaurante" class="link facebook"
                            target="_blank"><span></span></a>
                        <a href="https://www.instagram.com/moons.restaurante" class="link instagram"
                            target="_blank"><span></span></a>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="right">
                    <a href="https://www.atitudecomunicacao.com.br">
                        <img src="{{asset('img/atitude.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
