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
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Thumb</label>
                                <input type="text" class="form-control" id="thumb" name="thumb">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale_date</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>
                                <input type="text" class="form-control" id="series" name="series" required>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type" required>
                            </div>
                        </div>
                        <div class="mb-3 col-12 col-lg-6 d-flex flex-column ">
                            <label for="description" class="form-label">Description</label>
                            <div class="flex-grow-1   ">
                                <textarea class="form-control h-100 " id="description" name="description"></textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>

    </main>


@endsection
