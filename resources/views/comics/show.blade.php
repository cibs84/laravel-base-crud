@extends('layouts.app')

@section('main_content')
    <h1>{{ $comic->title }}</h1>
    <div>
        <img src="{{ $comic->thumb }}" alt="" width="200px">
        <div>
            <div>Titolo: {{ $comic->title }}</div>
            <div>Descrizione: {{ $comic->description }}</div>
            <div>Copertina: {{ $comic->thumb }}</div>
            <div>Prezzo: {{ $comic->price }}</div>
            <div>Serie: {{ $comic->series }}</div>
            <div>Data Sconto: {{ $comic->sale_date }}</div>
            <div>Tipologia: {{ $comic->type }}</div>
        </div>
    </div>
@endsection