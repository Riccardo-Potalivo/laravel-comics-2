@extends('layouts.app')

@section('title', $comic->title)

@section('content')

    <main>
        <section class="poster">

            <div class="container position-relative h-100 ">
                <div class="img_box">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="d-flex justify-content-between ">
                    <h2 class="text-uppercase ">{{ $comic->title }}</h2>

                    <h2>
                        <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit Comic</a>
                    </h2>
                </div>
                <h3>{{ $comic->type }}</h3>

                <p>{{ $comic->description }}</p>
                <p>{{ $comic->price }}</p>
            </div>
        </section>

    </main>


@endsection
