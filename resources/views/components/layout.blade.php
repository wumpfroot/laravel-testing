<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Testing</title>
</head>
<body>
    <header>
        <nav>
            <h1><a class="hover:underline" href="/">Laravel Games</a></h1>
            <a href="/games">All Games</a>
            <a href="/games/add">Add game</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>