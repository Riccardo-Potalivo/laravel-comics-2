@extends('layouts.app')

@section('title', 'Movies')

@section('content')

    <main>
        <section class="container">
            <h1>Curernt Series</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 p-3">
                        <div class="img_container">
                            <a href="{{ route('movies.show', $movie['id']) }}">
                                <img src="{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
                                <div class="series_price">
                                    <p>{{ $movie['vote_average'] }}</p>
                                </div>
                            </a>
                        </div>
                        <p class="mt-3">{{ $movie['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <style lang="scss">
        .img_container {
            width: 100%;
            aspect-ratio: 1;
            position: relative;
        }

        .img_container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .series_price {
            color: white;
            position: absolute;
            height: 100%;
            background-color: #00000080;
            width: 100%;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.2s;
            opacity: 0;

            &:hover {
                opacity: 1;
            }
        }
    </style>

@endsection
