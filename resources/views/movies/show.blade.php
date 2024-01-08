@extends('layouts.app')

@section('title', $movie['title'])

@section('content')

    <main>
        <section class="poster">

            <div class="container position-relative h-100 ">
                <div class="img_box">
                    <img src="{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="text-uppercase ">{{ $movie['title'] }}</h2>
                <p>{{ $movie['overview'] }}</p>
            </div>
        </section>

    </main>


@endsection
