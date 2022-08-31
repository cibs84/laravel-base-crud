@extends('layouts.app')

@section('main_content')
    <h1>Modifica i dati</h1>
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title"  value='{{ $comic->title }}'>
        </div>
        <br>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"  >{{ $comic->description }}</textarea>
        </div>
        <br>

        <div>
            <label for="thumb">Immagine Url</label>
            <input type="text" name="thumb" id="thumb"  value='{{ $comic->thumb }}'>
        </div>
        <br>

        <div>
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price"  value='{{ $comic->price }}'>
        </div>
        <br>

        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series"  value='{{ $comic->series }}'>
        </div>
        <br>

        <div>
            <label for="sale_date">Data Sconto</label>
            <input type="date" name="sale_date" id="sale_date"  value='{{ $comic->sale_date }}'>
        </div>
        <br>

        <div>
            <label for="type">Tipologia</label>
            <input type="text" name="type" id="type"  value='{{ $comic->type }}'>
        </div>
        <br>
        
        <input type="submit" value="Invia">
    </form>
@endsection