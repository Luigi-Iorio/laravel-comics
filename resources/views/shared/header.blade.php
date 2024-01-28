{{-- header --}}
<header>
    <nav>
        {{-- logo --}}
        <div class="logo">
            <a href="/"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc"></a>
        </div>
        {{-- /logo --}}

        {{-- header links  --}}
        <ul>
            @foreach ($headerLinks as $link)
                <li><a href="{{ $link }}">{{ $link }}</a></li>
            @endforeach
        </ul>
        {{-- /header links --}}
    </nav>

    {{-- jumbo --}}
    <div class="jumbo">
        <div class="cont">
            <h2>Current Series</h2>
        </div>
    </div>
    {{-- /jumbo --}}
</header>
{{-- /header --}}
