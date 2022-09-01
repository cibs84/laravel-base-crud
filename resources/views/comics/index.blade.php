@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">

            @if ( $deleted )
                <div class="alert alert-success" role="alert">
                    Fumetto eliminato con successo!
                </div>
            @endif

            <h1>Fumetti</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($comics_array as $comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }} image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text description">
                                    <span>{{ $comic->description }}</span>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span>Serie:</span> {{ $comic->series }}</li>
                                <li class="list-group-item"><span>Tipologia:</span> {{ $comic->type }}</li>
                                <li class="list-group-item"><span>Prezzo:</span> {{ $comic->price }}</li>
                            </ul>
                            <div class="card-body">
                                {{-- Scopri di più --}}
                                <a href="{{ route('comics.show', [$comic->id]) }}" class="btn btn-primary">Scopri di più</a>
                                {{-- Modifica --}}
                                <a href="{{ route('comics.edit', [$comic->id]) }}" class="btn btn-primary">Modifica</a>
                                {{-- Cancella --}}
                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <input class='btn btn-danger btn-cancella' type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare?');">
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </section>
@endsection

