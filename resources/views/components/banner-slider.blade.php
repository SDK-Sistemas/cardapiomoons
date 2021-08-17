<div class="main_slider js_height">
    <div class="slider_wrap" id="main_slider_wrap">
        @foreach ($banners as $banner)
            <x-banner :banner="$banner">
            </x-banner>
        @endforeach
    </div>
    <div class="arrows">
        <div class="arrow prev"></div>
        <div class="arrow next"></div>
    </div>
</div>
