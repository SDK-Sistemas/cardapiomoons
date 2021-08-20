<div class="most_popular">
    <div class="wrap">
        <div class="wrap_float">
            <div class="title_wrap">
                <h2 class="title">Nossos Pratos</h2>
                <p class="subtitle">
                    Latin literature from 45
                </p>
                <div class="controls">
                    <a href="{{ route('cardapio') }}" class="link">Ver Todos Os Pratos</a>
                    <div class="arrows">
                        <div class="arrow prev"></div>
                        <div class="arrow next"></div>
                    </div>
                </div>
            </div>
            <div class="section_content">
                <div class="tour-slider" id="tour-slider">
                    @foreach ($pratos as $prato)
                        <x-card href="#" background="{{ asset('storage/' . $prato->images->first()->path) }}">
                            <x-slot name="subtitle">
                                {{ $prato->categoria->title }}
                            </x-slot>
                            <x-slot name="title">
                                {{ $prato->title }}
                            </x-slot>
                            {{ $prato->subtitle }}
                        </x-card>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
