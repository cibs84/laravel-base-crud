@extends('layouts.app')

@section('main_content')
    <h1>Inserisci un nuovo fumetto nel database</h1>
    
    {{-- Print Error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form --}}
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title"  value='{{ old('title') }}'>
        </div>
        <br>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"  >{{ old('description') }}</textarea>
        </div>
        <br>

        <div>
            <label for="thumb">Immagine Url</label>
            <input type="text" name="thumb" id="thumb"  value='{{ old('thumb') }}'>
        </div>
        <br>

        <div>
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price"  value='{{ old('price') }}'>
        </div>
        <br>

        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series"  value='{{ old('series') }}'>
        </div>
        <br>

        <div>
            <label for="sale_date">Data di uscita</label>
            <input type="date" name="sale_date" id="sale_date"  value='{{ old('sale_date') }}'>
        </div>
        <br>

        <div>
            <label for="type">Tipologia</label>
            <input type="text" name="type" id="type"  value='{{ old('type') }}'>
        </div>
        <br>
        
        <input type="submit" value="Invia">
    </form>
@endsection