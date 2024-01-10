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
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title"
                                    value="@error('title'){{ old('title') }}@else{{ $comic->title }}@enderror" required>

                                @error('title')
                                    <div id="title" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Thumb</label>
                                <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                                    id="thumb" name="thumb"
                                    value="@error('thumb'){{ old('thumb') }}@else{{ $comic->thumb }}@enderror">

                                @error('thumb')
                                    <div id="thumb" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price"
                                    value="@error('price'){{ old('price') }}@else{{ $comic->price }}@enderror" required>

                                @error('price')
                                    <div id="price" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale date</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date"
                                    value="{{ $comic->sale_date }}" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>
                                <input type="text" class="form-control @error('series') is-invalid @enderror"
                                    id="series" name="series"
                                    value="@error('series'){{ old('series') }}@else{{ $comic->series }}@enderror"
                                    required>

                                @error('series')
                                    <div id="series" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type"
                                    value="{{ $comic->type }}" readonly>
                            </div>

                        </div>

                        <div class="mb-3 col-12 col-lg-6 d-flex flex-column ">

                            <label for="description" class="form-label">Description</label>
                            <div class="flex-grow-1   ">
                                <textarea class="form-control h-100 @error('description') is-invalid @enderror" id="description" name="description">

                                @error('description')
{{ old('description') }}@else{{ $comic->description }}
@enderror

                                </textarea>

                                @error('description')
                                    <div id="description" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>
                    {{-- per confermare le modifiche --}}
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#delete_button">Delete</button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete_button" tabindex="-1" aria-labelledby="delete_button_label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="delete_button_label">Conferma</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Cliccando su confirm il prodotto verrà eliminato.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Confirm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </main>


@endsection
