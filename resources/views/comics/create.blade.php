@extends('layouts.app')

@section('main_content')
    <h1>Inserisci un nuovo fumetto nel database</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </div>
        <br>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>

        <div>
            <label for="thumb">Immagine Url</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <br>

        <div>
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price">
        </div>
        <br>

        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series">
        </div>
        <br>

        <div>
            <label for="sale_date">Data Sconto</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <br>

        <div>
            <label for="type">Tipologia</label>
            <input type="text" name="type" id="type">
        </div>
        <br>
        
        <input type="submit" value="Invia">
    </form>
@endsection