@extends('layouts.app')

@section('title', 'edit ' . $comic->title)

@section('content')

    <main>
        <div class="container">
            <div class="m-5">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $comic->title }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Thumb</label>
                                <input type="text" class="form-control" id="thumb" name="thumb"
                                    value="{{ $comic->thumb }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    value="{{ $comic->price }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale_date</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date"
                                    value="{{ $comic->sale_date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>
                                <input type="text" class="form-control" id="series" name="series"
                                    value="{{ $comic->series }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type"
                                    value="{{ $comic->type }}" required>
                            </div>
                        </div>
                        <div class="mb-3 col-12 col-lg-6 d-flex flex-column ">
                            <label for="description" class="form-label">Description</label>
                            <div class="flex-grow-1   ">
                                <textarea class="form-control h-100 " id="description" name="description">{{ $comic->description }}</textarea>
                            </div>
                        </div>

                    </div>
                    {{-- per confermare le modifiche --}}
                    <button type="submit" class="btn btn-success">Confirm</button>
                </form>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>

    </main>


@endsection
