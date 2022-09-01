<header>
    <nav class="container">
        <ul>
            <li><a class="{{ Route::currentRouteName() === 'home' ? 'current' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="{{ Route::currentRouteName() === 'comics.index' ? 'current' : '' }}" href="{{ route('comics.index') }}">Fumetti</a></li>
            <li><a class="{{ Route::currentRouteName() === 'comics.create' ? 'current' : '' }}" href="{{ route('comics.create') }}">Inserisci un nuovo fumetto</a></li>
        </ul>
    </nav>
</header>