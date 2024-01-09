@extends('layouts.app')

@section('title', 'edit ' . $comic->title)

@section('content')

    <main>
        <div class="m-5 ">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" id="title" name="title" value="{{ $comic->title }}" placeholder="inserisci un titolo"
                    class="form-control ">
                <input type="text" id="description" name="description" value="{{ $comic->description }}"
                    placeholder="inserisci un titolo" class="form-control ">
                <input type="text" id="price" name="price" value="{{ $comic->price }}"
                    placeholder="inserisci un prezzo" class="form-control ">
                <input type="text" id="type" name="type" value="{{ $comic->type }}"
                    placeholder="inserisci un type" class="form-control ">

                {{-- per confermare le modifiche --}}
                <button type="submit" class="btn btn-success">Confirm</button>

            </form>
            {{-- per eliminare il prodotto --}}
            {{-- <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
        </div>
        <section class="poster">


        </section>

    </main>


@endsection
