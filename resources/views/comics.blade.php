@extends('layouts.main')

@section('main')
    {{-- main --}}
    <main>
        <ul class="cont comics">
            {{-- comic --}}
            @foreach ($fumetti as $comic)
                <li class="card">
                    <a href="/comic">
                        <div class="img-cont">
                            <img src="{{ $comic['thumb'] }}" alt="title">
                        </div>
                        <h3>{{ $comic['series'] }}</h3>
                    </a>
                </li>
            @endforeach
            {{-- /comic --}}
            {{-- button --}}
            <button>Load More</button>
            {{-- button --}}
        </ul>
        {{-- banner --}}
        <div class="banner">
            <ul>
                @foreach ($bannerList as $element)
                    <li>
                        <div class="image">
                            <img src="{{ Vite::asset($element['img']) }}" alt="{{ $element['text'] }}" />
                        </div>
                        <p>{{ $element['text'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- /banner --}}
    </main>
    {{-- /main --}}
@endsection
