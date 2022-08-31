@extends('layouts.app')

@section('main_content')
    <h1>I nostri fumetti</h1>
    @foreach ($comics_array as $comic)
        <div>
            <div>
                <div>Titolo: {{ $comic->title }}</div>
                <div>Serie: {{ $comic->series }}</div>
                <div>Tipologia: {{ $comic->type }}</div>
                <div>Prezzo: {{ $comic->price }}</div>
                {{-- Dettagli --}}
                <div>
                    <a href="{{ route('comics.show', [$comic->id]) }}">
                        Dettagli
                    </a>
                </div>
                {{-- Modifica --}}
                <div>
                    <a href="{{ route('comics.edit', [$comic->id]) }}">
                        Modifica
                    </a>
                </div>
            </div>
        </div>
        <br>
    @endforeach
@endsection