@extends('layouts.app')

@section('title', 'Add Comic')

@section('content')

    <main>

        <section>
            <div class="container">
                <h1>Add Comic</h1>
                <form action="{{ route('comics.store') }}" method="POST" class="my-5">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-lg-6">

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}" required>

                                @error('title')
                                    <div id="title" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                @php
                                    $img = 'https://picsum.photos/id/' . random_int(1, 200) . '/200/300';
                                @endphp

                                <label for="thumb" class="form-label">Thumb</label>
                                <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                                    id="thumb" name="thumb" value="{{ $img }}">
                                @error('thumb')
                                    <div id="thumb" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" value="{{ old('price') }}" required>

                                @error('price')
                                    <div id="price" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                @php
                                    $date = date('Y-m-d');
                                @endphp

                                <label for="sale_date" class="form-label">Sale date</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date"
                                    value="{{ $date }}" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>
                                <input type="text" class="form-control @error('series') is-invalid @enderror"
                                    id="series" name="series" value="{{ old('series') }}" required>

                                @error('series')
                                    <div id="series" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type" value="comic book"
                                    readonly>
                            </div>
                        </div>

                        <div class="mb-3 col-12 col-lg-6 d-flex flex-column ">
                            <label for="description" class="form-label">Description</label>
                            <div class="flex-grow-1">
                                <textarea id="description" class="form-control h-100 @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div id="description" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>

    </main>


@endsection
