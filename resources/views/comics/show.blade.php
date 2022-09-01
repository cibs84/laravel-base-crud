@extends('layouts.app')

@section('main_content')
    <section class="section-show">
        <div class="container">
            @if ( $created )
                <div class="alert alert-success" role="alert">
                    Fumetto inserito con successo!
                </div>
            @elseif ( $updated )
                <div class="alert alert-success" role="alert">
                    Fumetto modificato con successo!
                </div>
            @endif
            
            <div class="card mb-3">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }} cover">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h1 class="card-title">{{ $comic->title }}</h1>
                            <div class="card-text">{{ $comic->description }}</div>
                            <div class="card-text"><span class="text-muted">Serie: {{ $comic->series }}</span></div>
                            <div class="card-text"><span class="text-muted">Tipologia: {{ $comic->type }}</span></div>
                            <div class="card-text"><span class="text-muted">Data di uscita: {{ $comic->sale_date }}</span></div>
                            <div class="card-text"><span class="text-muted">Prezzo: {{ $comic->price }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection