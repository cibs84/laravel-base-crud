@extends('layouts.app')

@section('main_content')
    <section class="section-create">
        <div class="container text-center">
            <h1>Inserisci un nuovo fumetto nel database</h1>

            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                
                {{-- Title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value='{{ old('title') }}'>
                    @error('title')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Thumb --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine Url</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value='{{ old('thumb') }}'>
                    @error('thumb')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" step='0.01' value='{{ old('price') }}'>
                    @error('price')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Series --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value='{{ old('series') }}'>
                    @error('series')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Sale Date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value='{{ old('sale_date') }}'>
                    @error('sale_date')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type" value='{{ old('type') }}'>
                    @error('type')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" cols="30" rows="10" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger form-text">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Submit --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection