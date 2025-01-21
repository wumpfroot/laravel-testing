<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1 class="text-4xl">Hello Laravel!</h1>
        <p class="m-4">Click below: </p>
        <button><a href="/games">Find info</a></button>
    </div>
</body>
</html>