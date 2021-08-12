<form action="{{ route('lang') }}" method="POST" class="currency">
    @csrf
    <select name="locale" onchange="this.form.submit()">
        @foreach (['pt' => 'pt_BR', 'en' => 'en', 'es' => 'es'] as $key => $value)
            <option {{ App::isLocale($value) ? 'selected' : '' }} value="{{ $value }}">
                {{ $key }}
            </option>
        @endforeach
    </select>
</form>
