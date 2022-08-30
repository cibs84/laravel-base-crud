<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- HEADER --}}
    <header>
        <nav>
            <ul>
                <li><a href="#">I nostri fumetti</a></li>
                <li><a href="#">Inserisci un nuovo fumetto</a></li>
            </ul>
        </nav>
    </header>

    {{-- MAIN --}}
    @yield('main_content')
</body>
</html>