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
                </div>
                <div class="row">

                    <div class="col-12 col-md-4 my-4">
                        <h2 class="text-uppercase ">{{ $comic->title }}</h2>
                        <h4>Type: {{ $comic->type }}</h3>
                            <h4>Price: ${{ $comic->price }}</h4>
                            <h2>
                                <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit Comic</a>
                            </h2>
                    </div>
                    <div class="col-12 col-md-8 my-4 border-start border-primary border-3">
                        <h5>Description:</h5>
                        <p>{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection
