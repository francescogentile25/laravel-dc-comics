@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="{{ $comic->thumb }}" alt="" style="max-width:400px" class="">
                <h4 class="text-danger"> $ {{ $comic->price }}</h4>
                <h1 class="text-center">{{ $comic->title }}</h1>
                <p>{!! $comic->description !!}</p>
                <p class="badge rounded-pill text-bg-primary fs-6">{{ $comic->series }}</p>
                <span class="badge rounded-pill text-bg-success fs-6">{{ $comic->type }}</span>
                <a class="btn btn-danger rounded-pill fs-6" href="{{ route('comics.edit', $comic) }}">Modifica</a>

            </div>
        </div>

    </div>
@endsection
