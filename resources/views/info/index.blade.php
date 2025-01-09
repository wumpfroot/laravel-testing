<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
</head>
<body>
    <h1>Info section</h1>
    <p>{{ $greeting }}</p>

    <h2>Games I am playing right now</h2>

    <ul>
        <h3>Games are as follows:</h3>
        <li>
            <a href="/info/{{$games[0]["id"]}}">
                {{ $games[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/info/{{$games[1]["id"]}}">
                {{ $games[1]["name"] }}
            </a>
        </li>
        <li>
            <a href="/info/{{$games[2]["id"]}}">
                {{ $games[2]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>