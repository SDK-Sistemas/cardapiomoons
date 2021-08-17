<a href="{{ $href }}" class="tour_item" style="background-image: url({{ $background ?? '' }})">
    <div class="tour_item_top">
        <p class="country">
            <span>{{ $subtitle ?? '' }}</span>
        </p>
    </div>
    <div class="tour_item_bottom">
        <h3 class="_title">{{ $title }}</h3>
        <div class="_info">
            <div class="_info_left">
                {{ $slot }}
            </div>
        </div>
    </div>
    <div class="shadow js-shadow"></div>
</a>
