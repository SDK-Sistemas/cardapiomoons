<div class="currency">
    <select onchange="window.location.href = `{{ route('home') }}/${this.value}`">
        @foreach (['pt', 'en', 'es'] as $locale)
            <option {{ App::isLocale($locale) ? 'selected' : '' }}>
                {{ $locale }}
            </option>
        @endforeach
    </select>
</div>
