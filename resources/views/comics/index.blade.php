@extends('layouts.app')
@section('content')
    <div class=" container grid">
        @foreach ($comics as $comic)
            <a href="{{ route('comics.show', $comic) }}">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"> $ {{ $comic->price }}</p>
                    </div>
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </a>
        @endforeach
    </div>
@endsection
<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
</style>
