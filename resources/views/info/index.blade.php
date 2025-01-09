<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
</head>
<body>
    <h1>Info section</h1>
    @if($greeting)
        <p>Welcome to the game section</p>
    @endif

    <h2>Games I am playing right now</h2>
    <h3>Games are as follows:</h3>
    <ul>
        @foreach ($games as $game)
            <li>
                <a href="/info/{{ $game["id"] }}">{{ $game["name"] }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>