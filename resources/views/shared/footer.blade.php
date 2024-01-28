{{-- footer --}}
<footer>
    {{-- footer top --}}
    <div class="cont-footer">
        <div class="cont-links">
            <div class="cont-bg">
                <div class="footer-links">
                    @foreach ($footerLinks as $link)
                        <ul>
                            <li class="title">{{ $link['title'] }}</li>
                            @foreach ($link['links'] as $text)
                                <li>{{ $text }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo dc">
                </div>
            </div>
        </div>
    </div>
    {{-- /footer top --}}

    {{-- footer bottom  --}}
    <div class="footer-bottom">
        <div class="cont">
            <button>sign-up now</button>
            <div class="icon">
                <h3>follow us</h3>
                <ul>
                    @foreach ($socialIcons as $icon)
                        <li><a href="#"><img src="{{ Vite::asset($icon) }}" alt="social"></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    {{-- footer bottom  --}}
</footer>
{{-- /footer --}}
