@extends('layouts.app')

@section('title', $comic['title'])

@section('content')

    <main>
        <section class="poster">

            <div class="container position-relative h-100 ">
                <div class="img_box">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="text-uppercase ">{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
            </div>
        </section>

    </main>


@endsection
