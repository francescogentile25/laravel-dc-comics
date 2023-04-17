@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale-date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sale-date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>

    </div>
@endsection
