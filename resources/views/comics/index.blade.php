@extends('layouts.app')
@section('content')
    @foreach ($comics as $comic)
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $comic->description }}</p>
            </div>
        </div>
    @endforeach
@endsection
