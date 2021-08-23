<div class="slide">
    <div class="bg-img" style="background-image: url({{ asset("storage/{optional($banner->image)->path}") }})"></div>
    <div class="wrap">
        <div class="wrap_float js_height">
            <div class="slide_content">
                <div class="title_wrap">
                    <p class="country">{{ $banner->subtitle }}</p>
                    <h2 class="slide_title">{{ $banner->title }}</h2>
                </div>
                <p class="text">
                    {{ $banner->description }}
                </p>
            </div>
        </div>
    </div>
</div>
