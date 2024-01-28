@extends('layouts.main')

@section('main')
    {{-- main --}}
    <main>
        <ul class="cont">
            {{-- comic --}}
            @foreach ($data as $comic)
                <li class="card">
                    <a href="#">
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
    </main>
    {{-- /main --}}
@endsection
