@extends('layouts.app')

@section('content')

        {{-- @php
            dd(Auth::user()->hasRole('admin'));
        @endphp --}}

        {{-- questa è la view per GUEST e per utente non loggato --}}
        <div class="container">
       {{-- questo è un commento di test di ferdy --}}
            @foreach ($data as $house)
                <div class="content m-3 d-inline-block">
                    <div class="card bg-light mb-3" style="width: 18rem; height: 400px;">

                        <img style="width: 100%; height: 170px;"
                        @if ($house->path == null)
                            src="https://www.ancebiella.it/wp-content/uploads/2016/01/img-not-found-350x195.jpg"
                        @endif

                        src="{{ asset('storage/' . $house->path) }}"

                        class="card-img-top;"
                        alt="...">
                        {{-- @php
                            dd($house->path);
                        @endphp --}}
                        <div class="card-body">
                            <h5 style="white-space:nowrap;" class="card-title">{{ $house->name }}</h5>
                            <p class="card-text">{{ $house->city }}</p>
                            <p class="card-text">€ {{ $house->price }}</p>

                            @if (Auth::user() == null)
                                <a href="{{ route('login') }}" class="btn btn-secondary">Details</a>
                            @elseif(Auth::user()->can('watch'))
                                <a href="#" class="btn btn-primary">Details</a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

@endsection
