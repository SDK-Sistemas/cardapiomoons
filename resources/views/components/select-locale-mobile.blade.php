<form action="{{ route('lang') }}" method="POST" class="currency_mob">
    @csrf
    <select name="lang" onchange="this.form.submit()">
        @foreach (['pt', 'en', 'es'] as $locale)
            <option {{ App::isLocale($locale) ? 'selected' : '' }}>
                {{ $locale }}
            </option>
        @endforeach
    </select>
    <p>
        {{ __('Escolha seu idioma.') }}
    </p>
</form>
