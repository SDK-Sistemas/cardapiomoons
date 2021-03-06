<div class="stories">
    <div class="wrap">
        <div class="wrap_float">
            <div class="title_wrap">
                <h2 class="title">{{ __('Pelo olhar dos clientes') }}</h2>
                <p class="subtitle">
                    {{ __('As fotos neste espaço foram tiradas pelos nossos clientes, atestando a experiência Moons.') }}
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
                        <x-card-stories href="#" background="{{ asset('storage/' . $storie->image->path) }}">
                            <x-slot name="title">
                                {{ $storie->title }}
                            </x-slot>
                            <x-slot name="subtitle">
                                {{ $storie->subtitle }}
                            </x-slot>
                        </x-card-stories>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
