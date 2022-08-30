@extends('layouts.app')

@section('main_content')
    <h1>La nostra lista di fumetti</h1>
    @foreach ($comics_array as $comic)
        <div>
            <a href="{{ route('comics.show', [$comic['id']]) }}">
                <img src="{{ $comic['thumb'] }}" alt="" width="200px">
                <div>
                    <div>Titolo: {{ $comic['title'] }}</div>
                    <div>Descrizione: {{ $comic['description'] }}</div>
                    <div>Copertina: {{ $comic['thumb'] }}</div>
                    <div>Prezzo: {{ $comic['price'] }}</div>
                    <div>Serie: {{ $comic['series'] }}</div>
                    <div>Data Sconto: {{ $comic['sale_date'] }}</div>
                    <div>Tipologia: {{ $comic['type'] }}</div>
                </div>
            </a>
        </div>
        <br>
    @endforeach
@endsection